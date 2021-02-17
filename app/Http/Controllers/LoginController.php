<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        // Retrive Input
        $credentials = array_merge($request->only('name', 'password'), ['status' => '1']);
        
        if (Auth::attempt($credentials)) {
            // if success login
            return redirect()->intended();
        }
        // if failed login
        return redirect('login')->withInput()->withErrors('Đăng nhập thất bại');
    }
}