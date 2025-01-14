<?php

use App\Http\Controllers\ErabiltzaileController;

Route::post('/register', [ErabiltzaileController::class, 'register']);
