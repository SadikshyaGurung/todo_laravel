<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

Route::middleware("auth")->get('/', [TodoController::class,'index']);
Route::get('/add', [TodoController::class,'add']);
Route::post('/add', [TodoController::class,'store']);
Route::get('/update/{id}', [TodoController::class,'updateView']);
Route::put('/update/{id}', [TodoController::class,'update']);
Route::delete('/delete/{id}', [TodoController::class,'destroy']);

Route::get('/register', [UserController::class, 'registerView']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'loginView'])->name("login");
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);



Route::get('/edit', function() {
    return view('edit');
});

Route::get('/welcome', function() {
    return view('welcome');
});



