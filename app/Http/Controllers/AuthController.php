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

        //Chcar se o usuário já existe
        $user = User::find()


    }

}
