<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class MainController
{

    public function home()
    {
        $id = session('user.id');
        $tasks = User::find($id)->tasks()->get()->toArray();


        return view('home', ['tasks' => $tasks]);
    }

    public function login()
    {
        return view('login');
    }

    public function singin()
    {
        return view('singin');
    }

    public function newNoteSubmit(Request $request)
    {

        $request->validate(
            [
                'text_task' => 'required|min:8|max:3000',
            ],
            [
                'text_task.required' => 'Por favor, digite o conteúdo da sua tarefa.',
                'text_task.min' => 'O conteúdo da tarefa deve ter no mínimo :min caracteres.',
                'text_task.max' => 'O conteúdo da tarefa deve ter no máximo :max caracteres.',
            ]
        );

        $task = new Task();
        $task->text = $request->text_task;
        $task->user_id = session('user.id');
        $task->updated_at = NULL;
        $task->save();

        return redirect()->route('home');

    }
}
