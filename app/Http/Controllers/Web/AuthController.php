<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


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
        $user = Auth::user();

        if ($user) {
            $authService = new AuthService(new User());
            $authService->logout($user);

            Auth::logout();

            return redirect()->route('form_login')->with('success', 'You have been logged out successfully.');
        }

        return redirect()->route('form_login')->withErrors(['error' => 'You are not logged in.']);
    }
}
