<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestion;
use App\Models\Apuracao;
use App\Models\Enquete;
use App\Models\Opcoes;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class QuestionController extends Controller
{

   

    // Listagem de Enquetes e Redirecionamento para Dash de Enquetes

    public function list()
    {
        $enquetes = Enquete::where([['id_user', '=', Auth::guard("web")->user()->id]])->with('opcoes')->get();

        return view('quest.question', compact('enquetes'));
    }
    
    // CRUD Enquetes(Inicio)
    // Redirecionamento para página de cadastro de enquete

    public function index()
    {
        return view('quest.questionCreate');
    }

    // Validação Back-End e cadastro da Enquete
    public function create(StoreQuestion $request)
    {

        $datainicio = explode(" ", $request->dtinicio);
        $datetime = DateTime::createFromFormat('d/m/Y',  $datainicio[0]);
        $newdateini = $datetime->format('Y-m-d');

        $datatermino = explode(" ", $request->dttermino);
        $datetime = DateTime::createFromFormat('d/m/Y',  $datatermino[0]);
        $newdateterm = $datetime->format('Y-m-d');

        $enquete = Enquete::create([
            'id_user' => Auth::guard("web")->user()->id,
            'titulo' => $request->titulo_enquete,
            'descricao' => $request->descricao ?? null,
            'inicio' => $newdateini . " " . $datainicio[1],
            'fim' => $newdateterm . " " . $datainicio[1],
        ]);

        foreach ($request->resposta as $opcao) {
            Opcoes::create([
                'id_enquete' => $enquete->id_enquete,
                'descricao' => $opcao,
            ]);
        }
        Alert::success('Enquete', 'Cadastrada com Sucesso !');
        return redirect()->route('question.index', $request->assembleia);
    }

    // Redirecionamento para página de edição de enquete 
    public function edit(Enquete $question)
    {
        if ($question->apuracao()->exists()) {
            Alert::warning('Enquete', 'Você não pode editar uma enquete já em apuração !');
            return redirect()->route('question.index', $question->id_assembleia);
        }

        $datainicio = explode(" ", $question->inicio);
        $datetime = DateTime::createFromFormat('Y-m-d',  $datainicio[0]);
        $question->inicio = $datetime->format('d/m/Y');

        $datatermino = explode(" ", $question->fim);
        $datetime = DateTime::createFromFormat('Y-m-d',  $datatermino[0]);
        $question->fim = $datetime->format('d/m/Y');

        return view('quest.questionEdit', compact('question'));
    }

    // Validação Back-End e edição da Enquete
    public function update(StoreQuestion $request, Enquete $question)
    {
        $datainicio = explode(" ", $request->dtinicio);
        $datetime = DateTime::createFromFormat('d/m/Y',  $datainicio[0]);
        $newdateini = $datetime->format('Y-m-d');

        $datatermino = explode(" ", $request->dttermino);
        $datetime = DateTime::createFromFormat('d/m/Y',  $datatermino[0]);
        $newdateterm = $datetime->format('Y-m-d');

        $question->titulo = $request->titulo_enquete;
        $question->descricao = $request->descricao;
        $question->inicio = $newdateini . " " . $datainicio[1];
        $question->fim = $newdateterm . " " . $datainicio[1];
        $question->update();

        if ($question->opcoes()->count() == $request->quantidade_respostas) {

            foreach ($question->opcoes as $key =>  $opcao) {
                $opcao->descricao = $request->resposta[$key];
                $opcao->update();
            }
        } else {
            $question->opcoes()->delete();
            foreach ($request->resposta as $opcao) {
                Opcoes::create([
                    'id_enquete' => $question->id_enquete,
                    'descricao' => $opcao,
                ]);
            }
        }

        Alert::success('Enquete', 'Editada com Sucesso !');
        return redirect()->route('question.index', $request->assembleia);
    }

    // Validação Back-End e exclusão da Enquete
    public function destroy(Request $request)
    {
        if (!$enquete = Enquete::find($request->id)) {
            Alert::warning('Enquete', 'Enquete Inexistente !');
            return redirect()->back();
        }

        $votos = Apuracao::where('id_enquete', $request->id)->get();
        foreach($votos as $voto){
            $voto->delete();
        }

        $enquete->opcoes()->delete();

        $enquete->delete();

        Alert::success('Enquete', 'Apagada com Sucesso !');
        return redirect()->route('question.index');
    }

    // Listagem ,verificação da enquete(se ativa ou não) e verificação de voto
    public function questionary(Enquete $enquete)
    {
        if (Enquete::where([['id_enquete', '=', $enquete->id_enquete], ['fim', '>', now()]])->count() == 0) {
            Alert::error('Esta enquete já foi encerrada!', 'A Enquete T agradece sua participação.')->autoClose(5000);
            return redirect()->route('home');
        }

        $localIP = getHostByName(getHostName());

        $apuracao = Apuracao::where([['id_enquete', '=', $enquete->id_enquete], ['id_participante', '=', $localIP]])->first();

        return view('quest.questionary', compact('enquete', 'apuracao'));
    }

    // Verificação Back-end e cadastro do voto do usuário para a enquete
    public function storeQuest(Request $request, Enquete $enquete)
    {
        if($request["$enquete->id_enquete"] == null)
        {
            Alert::warning('Enquete', 'Marque uma opção para ser cadastrada !');
            return redirect()->route('questionary', compact('enquete'));
        }

        $localIP = getHostByName(getHostName());

        $apuracao = new Apuracao();
        $apuracao->id_enquete = $enquete->id_enquete;
        $apuracao->id_opcao = $request["$enquete->id_enquete"];
        $apuracao->id_participante = $localIP;
        $apuracao->save();

        return view('quest.questionary', compact('enquete', 'apuracao'));
    }

    
}
