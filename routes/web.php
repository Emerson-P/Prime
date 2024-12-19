<?php

use App\Http\Controllers\App;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

// Controller User é usada para enviar views login e cadastro
Route::get('/', [User::class , 'index'])->name('index');
Route::get('/cadastro', [User::class , 'cadastroPagina'])->name('cadastro_pagina');
Route::get('/login', [User::class , 'login'])->name('login_pagina');

Route::post('/cadastro', [User::class , 'cadastroPost'])->name('cadastro_post');
Route::post('/login', [User::class , 'loginPost'])->name('login_post');


Route::prefix('/app')->group(function(){
    Route::get('/HomePage', [App::class , 'HomePage'])->name('HomePage');
});

Route::fallback(function(){
    return view('fallBack');
});