<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginForm(){
        return view('backoffice.login');
    }
    function login(Request $request){
        if(Auth::attempt(['pseudonyme' => $request->pseudonyme, 'password' => $request->password])){
            return redirect('admin/board');
        }
        return redirect('connexion');
    }
    function logout(){
       Auth::logout();
    }
}
