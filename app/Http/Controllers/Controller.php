<?php

namespace App\Http\Controllers;

use App\Models\Enquete;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home(){
        $ultimasEnquetes = Enquete::latest()->limit(2)->get();
        
        $enquetesFinalizadas = Enquete::where([['fim','<',now()], ['inicio','<',now()]])->orderBy('id_enquete','asc')->get();
        $enquetesAIniciar = Enquete::where([['inicio','>',now()]])->orderBy('id_enquete','asc')->get();
        $enquetesEmAndamento = Enquete::where([['fim','>',now()], ['inicio','<',now()]])->orderBy('id_enquete','asc')->get();
    
        return view('quests', compact('enquetesFinalizadas', 'ultimasEnquetes', 'enquetesAIniciar', 'enquetesEmAndamento'));
    }

    public function dashboard()
    {
        $admin = User::get();
        return view('dashboard', compact('admin'));
    }

    public function register()
    {
        return view('auth.cadastro');
    }

    public function storeCliente(Request $request)
    {
        
        $cpf = preg_replace("/[^0-9]/", "", $request->cpf);

        $user = new User;
        $user->name = $request->nomecompleto;
        $user->situacao = 'ativo';
        $user->email = $request->email;
        $user->cpf = $cpf;
        $user->password = Hash::make($request->senha);

        $user->save();

        Alert::success('Administrador', 'Cadastrado com Sucesso !');
        return redirect()->route('login');

        // $cliente->id_veiculo = $id_veiculo;
        // $cliente->id_contrato = $id_veiculo;

    }

}
