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
    // Redirecionamento para página Login
    public function create()
    {
     
        return view('auth.login');
    }

    // Validação Back-end e retorno para página Password
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


        Alert::toast('Nada foi encontrado, cadastre-se como Administrador', 'warning');
        return redirect()->route('home');;

    }

    // Verificação Back-end e Criação da Sessão de Login
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

    // Verificação do middleware e destruição de sessão de login
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
