<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as UserModel;

class User extends Controller
{
    // Folder "index" contendo arquivos views como cadastro e login 
    public function index(){
        return view('index.index');
    }
    public function cadastroPagina(){
        return view('index.cadastro');
    }
    public function login(){
        return view('index.login');
    }
    
    public function cadastroPost(Request $request){

        $request->validate([
            'nome' => 'required|min:3|max:40',
            'email' => 'required',
            'senha' => 'required|min:3|max:12' 
        ]);

        $modelUser = new UserModel();
        $modelUser->name = $request->input('name');
        $modelUser->email = $request->input('email');
        $modelUser->password = $request->input('password');

        $modelUser->save();

    
        return view('index.login');
    }
}
