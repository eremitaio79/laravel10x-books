<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O e-mail não é válido.',
            'password.required' => 'A senha é um campo obrigatório.'
        ]
    );

        if(Auth::attempt($credenciais, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        } else {
            return redirect()->back()->with('erro', 'E-mail ou senha inválido.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(Route('site.index'));
    }

    public function create()
    {
        // Register a new user.
        return view('login.create');
    }

}
