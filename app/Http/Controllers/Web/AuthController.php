<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\LoginRequest;
use App\Http\Requests\Web\Auth\RegisterRequest;
use App\Http\Resources\Auth\UserResource;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function formLogin()
    {
        return view('auth.login');
    }

    public function formRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $registerRequest)
    {
        $params = $registerRequest->validated();

        $result = $this->authService->register($params);

        if ($result) {
            return redirect()->route('form_login')->with('success', 'Registration successful. Please login.');
        }

        return redirect()->route('form_login')->withErrors(['email' => 'Registration error. Please try again.']);
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
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('form_login')->with('success', 'You have logged out successfully.');
    }
}
