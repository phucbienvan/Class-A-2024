<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\LoginRequest;
use App\Services\AuthService;
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

    public function login(LoginRequest $loginRequest)
    {
        $params = $loginRequest->validated();

        if (Auth::attempt($params)) {
            return redirect()->route('products.index');
        }

        return redirect()->route('form_login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        $this->authService->logout();

        return redirect()->route('form_login');
    }
}
