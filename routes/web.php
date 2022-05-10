<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks' , [TaskController::class,'index']);
Route::get('tasks/{id}' , [TaskController::class,'show']);

Route::get('app' , function(){
    return view('layout.app');
});

Route::get('tasks', function(){
    return view('tasks');
});
