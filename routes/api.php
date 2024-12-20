<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;


Route::get('/carteira',function(){
    return ["erro" => "Sin"];
})->middleware('auth:api');
