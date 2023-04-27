<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authenticate(AuthenticateRequest $request)
    {
        if(Auth::attempt($request->validated())){
            $token = Auth::user()->createToken('auth_token')->plainTextToken;
            return response()->json(["data" =>[ "token" => $token ]],200);
        }
        else
        {
            return response()->json(["data" => [ "message" => "Login failed", ]],401);
        }
            
    }

    public function logout()
    {
        Auth::logout();
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        $user->password = Hash::make($data["password"]);  
        $user->save(); 
    }
}
