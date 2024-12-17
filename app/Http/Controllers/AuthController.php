<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController
{
    public function loginSubmit(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|min:11|max:50',
                'password' => 'required|min:8|max:20',
            ],
            [
                'email.required' => 'Por favor insira um email.',
                'email.email' => 'Por favor insira um email válido.',
                'email.min' => 'O email deve ter no mínimo :min caracteres.',
                'email.max' => 'O email deve ter no máximo :max caracteres.',
                'password.required' => 'Por favor insira uma senha.',
                'password.min' => 'A senha deve ter no mínimo :min caracteres.',
                'password.max' => 'A senha deve ter no máximo :max caracteres.',
            ]
        );

        $email = $request->email;
        $password = $request->password;


        //Chcar se o usuário já existe
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('loginError', 'Email ou senha inválidos.');
        }

        //Checar se a senha está correta

        if (!password_verify($password, $user->password)) {
            return redirect()->back()->with('loginError', 'Email ou senha inválidos.');
        }

        //Atualizar último login
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        // Setando login na sessão
        session([
            'user' => [
                'id' => $user->id,
                'username' => $user->name
            ]
        ]);

        return redirect()->route('home');

    }

    public function logout() {
        session()->forget('user');
        return redirect()->route('login');
    }
}
