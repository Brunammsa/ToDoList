<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarefa extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name',
        'task_done',
        'id'
    ];

    protected $table = 'Tarefa';
}
