<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Response;

class CheckboxController extends Controller
{
    public function toggle(Tarefa $tarefa, $task):Response
    {
        $tarefa = Tarefa::find($task);
        
        $tarefa->task_done = !$tarefa->task_done;
        $tarefa->save();

        return response(200);
    }
}
