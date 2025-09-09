<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;




Route::get('/posts', function () {
    // $post = new \App\Models\Post();
    // $post -> title = 'Meu primeiro post';
    // $post -> body = 'Lorem Ipsum';
    // $post -> save();


    $post = \App\Models\Post::create([
        'title' => request('title', 'Post padrão - ' . date('Y-m-d H:i:s')),
        'body' => request('body', 'Conteúdo padrão do post criado em ' . date('Y-m-d H:i:s'))
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Post criado com sucesso!',
        'post' => $post
    ], 201);

});


Route::get('/usuarios', [UserController::class, 'GetUsers']);
Route::get('/usuarios/{user}', [UserController::class, 'GetUser']);
Route::view('/', 'welcome');
Route::view('/contato', 'Contato');
   
