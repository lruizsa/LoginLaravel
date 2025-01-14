<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function map()
{
    $this->mapApiRoutes();

    // Otras rutas como las de web, console, etc.
}

public function mapApiRoutes()
{
    Route::prefix('api')
         ->middleware('api')
         ->namespace($this->namespace)
         ->group(base_path('routes/api.php')); // Aquí se carga api.php
}

}
