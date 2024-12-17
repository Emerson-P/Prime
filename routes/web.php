<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

// Controller User é usada para enviar views login e cadastro
Route::get('/', [User::class , 'index'])->name('index');
Route::get('/cadastro', [User::class , 'cadastroPagina'])->name('cadastro_pagina');
Route::get('/login', [User::class , 'login'])->name('login_pagina');

Route::post('/cadastro', [User::class , 'cadastroPost'])->name('cadastro_post');


    // ***** Usar expressão regular where ?

// Route::prefix('/app')->group(function(){
//      Route::get('/carteira', [App::class , 'carteira']);
// });

Route::fallback(function(){
    return view('fallBack');
});