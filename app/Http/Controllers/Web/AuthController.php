<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin(){
        return view('auth.login');
    }

    public function login(LoginRequest $loginRequest){
        $params = $loginRequest->validated();

        if (Auth::attempt($params)){
            return redirect()->route('productIndex');
        }
        return redirect()->route('formLogin')->with('loginErorr', 'Login erorr!');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('formLogin');
    }
}
