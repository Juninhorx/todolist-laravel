<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController
{
    public function singinSubmit(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:4|max:50',
                'phone' => 'required|min:10|max:20',
                'email' => 'required|email|min:11|max:50',
                'password' => 'required|min:8|max:20',
            ],
            [
                'name.required' => 'Por Favor insira o seu nome.',
                'name.min' => 'O nome deve ter no mínimo :min caracteres.',
                'name.max' => 'O nome deve ter no máximo :max caracteres.',
                'phone.required' => 'Por Favor insira o seu telefone.',
                'phone.min' => 'O telefone deve ter no mínimo :min caracteres.',
                'phone.max' => 'O telefone deve ter no máximo :max caracteres.',
                'email.required' => 'Por favor insira um email.',
                'email.email' => 'Por favor insira um email válido.',
                'email.min' => 'O email deve ter no mínimo :min caracteres.',
                'email.max' => 'O email deve ter no máximo :max caracteres.',
                'password.required' => 'Por favor insira uma senha.',
                'password.min' => 'A senha deve ter no mínimo :min caracteres.',
                'password.max' => 'A senha deve ter no máximo :max caracteres.',
            ]
        );

        $user = User::where('email', $request->email)->first();

        if ($user) {
            return redirect()->back()->withInput()->with('singinError', 'Já existe uma conta associada à este email.');
        }

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->phone = $request->phone;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->created_at = date('Y-m-d H:i:s');
        $newUser->save();
        
        return redirect()->route('login');
    }
}
