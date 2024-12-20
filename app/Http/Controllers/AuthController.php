<?php
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as HttpRequest;

class AuthController extends Controller
{
    public function login(HttpRequest $request){

        $credenciais = $request->all('email','password');

        $token = auth('api')->attempt($credenciais);

        return $token;
    }

}