<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

// Controller User é usada para enviar views login e cadastro
Route::get('/', [User::class , 'index'])->name('index');
Route::get('/cadastro', [User::class , 'cadastro'])->name('cadastro');
Route::get('/login', [User::class , 'login'])->name('login');

    // ***** Usar expressão regular where ?

// Route::prefix('/app')->group(function(){
//      Route::get('/carteira', [App::class , 'carteira']);
// });