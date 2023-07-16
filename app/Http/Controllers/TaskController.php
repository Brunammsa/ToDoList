<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use App\Models\Tarefa;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(): View
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

        return to_route('task.store');
    }

    public function edit(Tarefa $task)
    {
        return view('edit', [
            'task' => $task
        ]);
    }

    public function update($task, TaskFormRequest $request)
    {
        $tarefa = Tarefa::find($task);
        $tarefa->name = $request->name;
        
        $tarefa->save();

        return to_route('task.index');
    }

    public function destroy(int $task)
    {   
        Tarefa::find($task)->delete();
        
        return to_route('task.index');
    }
}
