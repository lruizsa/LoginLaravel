<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ErabiltzaileController extends Controller
{
    public function register(Request $request)
    {
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Crear el token
        $token = Str::random(64);
        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rola' => 'ikasle',
            'remember_token' =>$token,
        ]);

        

        // Devolver los datos del usuario y el token
        return response()->json([
            'message' => 'Usuario creado con éxito',
            'user' => $user,
            'token' => $token,
        ], 201);
    }
}
