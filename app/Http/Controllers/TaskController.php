<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use App\Models\Tarefa;
use Illuminate\Contracts\View\View;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Tarefa::query()->orderBy('name')->get();
        
        return view('dashboard',[
            'tasks' => $tasks
        ]);
    }

    public function store(TaskFormRequest $request)
    {
        $taskName = Tarefa::create($request->only(['name'])); //faz a requisição e guarda p salvar

        $taskName->save();

        return to_route('dashboard');
    }

    public function edit(string $id)
    {
        //
    }

    public function update(TaskFormRequest $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
