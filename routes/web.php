<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'App');
Route::inertia('/tasks', 'Task/Index');




