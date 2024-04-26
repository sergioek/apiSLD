<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token=$user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => 'Usuario registrado satisfactoriamente.', 'user' => $user,'access_token'=>$token,'token_type'=>'Bearer']);
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    if (!auth()->attempt($request->only('email', 'password'))) {
        return response()->json(['message' => 'Credenciales invalidas para iniciar sesion'], 401);
    }

    $user = auth()->user();
    $token = $user->createToken('auth_token')->plainTextToken;
    
    return response()->json(['message' => 'Inicio de sesion satisfactorio', 'token' => $token,'token_type'=>'Bearer','user'=>$user]);
}

public function logout(Request $request)
{
    $request->user()->currentAccessToken()->delete();

    return response()->json(['message' => 'Sesion de usuario cerrada']);
}



}
