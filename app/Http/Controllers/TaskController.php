<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Task;

class TaskController extends Controller
{
    public function show(){
        return Inertia::render('Task/Index', [
            'tasks' => Task::all(),
            'test' => 1+1
        ]);
    }
}
