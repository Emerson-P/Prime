<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    // Folder "index" contendo arquivos views como cadastro e login 
    public function index(){
        return view('index.index');
    }
    public function cadastro(){
        return view('index.cadastro');
    }
    public function login(){
        return view('index.login');
    }
}
