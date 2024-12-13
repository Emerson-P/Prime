<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;


Route::get('/', [User::class , 'index']);
Route::get('/cadastro', [User::class , 'cadastro']);
Route::get('/login', [User::class , 'login']);