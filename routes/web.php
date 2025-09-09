<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UserController::class, 'users']);
Route::get('/usuarios/{user}', [UserController::class, 'user']);
Route::view('/contato', 'users.contato');
   
