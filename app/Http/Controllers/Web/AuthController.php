<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $loginRequest)
    {
        $params = $loginRequest->validated();
        
        if (Auth::attempt($params)) {
            return redirect()->route('products.index');
        }

        return redirect()->route('form_login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        auth()->logout(); // Đăng xuất người dùng
        $request->session()->invalidate(); // Hủy session hiện tại
        $request->session()->regenerateToken(); // Tạo lại token để tránh các cuộc tấn công CSRF
    
        return redirect('/login'); // Hoặc bất kỳ trang nào bạn muốn chuyển hướng sau khi logout
    }

}
