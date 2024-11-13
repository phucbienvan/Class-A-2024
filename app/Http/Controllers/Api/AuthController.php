<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Services\AuthService;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Requests\Api\Auth\LoginRequest;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    protected $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function register(RegisterRequest $registerRequest)
    {
        $request = $registerRequest->validated();
        $result = $this->authService->register($request);
        
        if($result)
        {
            return response()->api_success('Success', $result);
        }
        return response()->json(['message' => 'error']);
    }
    public function login(LoginRequest $loginRequest)
    {
        $request = $loginRequest->validated();
        $result = $this->authService->login($request);
        if(!$result['status'])
        {
            return response()->api_error('Erorr', $result['message']);
        }
        return response()->api_success('Success', $result);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        
        return response()->json(['message' => 'Sucess logout!']);
    }
}