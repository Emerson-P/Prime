<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as UserModel;
use Illuminate\Support\Facades\Hash;

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

        $regras = [
            "name.required" => "Nome é obrigatorio" 
        ];

        $request->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required',
            'password' => 'required|min:3|max:12' 
        ],$regras);

        $modelUser = new UserModel();
        $modelUser->name = $request->input('name');
        $modelUser->email = $request->input('email');
        $modelUser->password = Hash::make($request->input('password'));

        $modelUser->save();

    
        return view('index.login');
    }

    public function loginPost(Request $request){


        $regras = [
            "password.required" => "Senha é obrigatorio" 
        ];

        $request->validate([
            'email' => 'email',
            'password' => 'required|min:3|max:12' 
        ], $regras);

        $modelUser = new UserModel();

        $email = $request->get('email');
        $password = $request->get('password');

        $usuario = $modelUser->where('email',$email)->get()->first();
        if(!$usuario || !Hash::check($password, $usuario->password)){

            echo "Erro";
        }

        
        print($usuario);
        
    }
}
