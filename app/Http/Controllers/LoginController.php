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
            return redirect('/');
        }
        // if failed login
        return redirect('login')->withInput()->withErrors('Đăng nhập thất bại. Hãy đảm bảo nhập đúng thông tin và tài khoản đã được quản trị viên xác thực');
    }
}
