<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Cliente;
use App\Models\ClienteToken;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

// use RealRashid\SweetAlert\Facades\Alert;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
     
        return view('auth.login');
    }

    public function password(Request $request)
    {
        $request->validate([
            'user' => 'required|min:8',
        ]);

        $user = User::where('email',$request->user)->orWhere('cpf',$request->user)->first();

        if (isset($user))
        {

            $email = $user->email;
            return view('auth.password',compact('email'));
        }

        $client = Cliente::where('email',$request->user)->orWhere('cpf',$request->user)->orWhere('cnpj',$request->user)->first();

        if (isset($client)) {

            $telefone = $client->telefone;
            $email = $client->email;
            $Msgtext = 'Agora consulte seu email ou caixa SMS para achar o código de acesso RapidoPark.';

            $find = ClienteToken::where('cliente_id',$client->id)
            ->where('updated_at', '>=', now()->subMinutes(5))
            ->first();

            if (is_null($find)) {
                $client->generateToken();
                $Msgtext = 'Foi gerado um novo código de acesso, Verifique seu Email ou SMS.';
            }

            Alert::toast($Msgtext, 'success');
            return view('VerifyCode',compact('telefone','email'));

        }

        Alert::toast('Escolha uma unidade para fazer o cadastro na RapidoPark.', 'warning');
        return redirect()->route('home');;

    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $credentials  = $request->only('email','password');
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return back()->withErrors([
            'password' => 'As credenciais estão incorretas.',
            ])->withInput();

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
