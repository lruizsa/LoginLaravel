<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Erabiltzaileak;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class ErabiltzaileaController extends Controller
{

    public function getUserDate(Request $request)
    {
        $users = Erabiltzaileak::all();
        return response()->json($users);
    }

    public function register(Request $request)
    {
    // Validar los datos de entrada
    $validatedData = $request->validate([
        'izena' => 'required|string|max:255',
        'abizena' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:erabiltzaileak,email',
        'password' => 'required|string|min:8|confirmed',
        'jaiotze_data' => 'required|date',
    ]);

    // Generar un token para el usuario
    $token = Str::random(32);

    // Crear el nuevo usuario
    $user = Erabiltzaileak::create([
        'izena' => $validatedData['izena'],
        'abizena' => $validatedData['abizena'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'jaiotze_data' => $validatedData['jaiotze_data'],
        'remember_token'=> $token
    ]);
   

    // Retornar respuesta con el token
    return response()->json([
        'message' => 'Usuario registrado exitosamente.',
        'user' => $user,
        'token' => $token,
    ], 201);
    }

    public function login(Request $request)
    {
        // Validar los datos del login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Verificar si el usuario existe y si la contraseña es correcta
        $user = Erabiltzaileak::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            // Si no se encuentra el usuario o la contraseña es incorrecta
            return response()->json([
                'message' => 'Las credenciales proporcionadas no son válidas.',
            ], 401);
        }

        // Crear un token para el usuario
        $token = $user->createToken('auth_token')->plainTextToken;

        // Devolver el token y los datos del usuario
        return response()->json([
            'user' => $user,  // Incluye toda la información del usuario, incluyendo el valor de 'admin'
            'token' => $token,
        ]);
    }
    





}