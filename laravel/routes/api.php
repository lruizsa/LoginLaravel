<?php

use App\Http\Controllers\ErabiltzaileaController;

Route::post('/register', [ErabiltzaileaController::class, 'register']);
Route::get('/login', [ErabiltzaileaController::class, 'login']);
Route::get('/users', 'App\Http\Controllers\ErabiltzaileaController@getUserDate');

// // Rutas protegidas
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/users', [ErabiltzaileaController::class, 'getUserDate']);
//     // Otras rutas protegidas
// });
