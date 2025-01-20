<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // /**
    //  * The application's global HTTP middleware stack.
    //  *
    //  * These middleware are run during every request to your application.
    //  *
    //  * @var array
    //  */
    // protected $middleware = [
    //     \App\Http\Middleware\TrustProxies::class,
    //     \Fruitcake\Cors\HandleCors::class,
    //     \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    //     \Illuminate\Http\Middleware\ValidatePostSize::class,
    //     \App\Http\Middleware\LoadConfiguration::class,
    //     \Illuminate\Routing\Middleware\SubstituteBindings::class,
    // ];

    // /**
    //  * The application's route middleware groups.
    //  *
    //  * These middleware may be assigned to groups of routes.
    //  *
    //  * @var array
    //  */
    // protected $middlewareGroups = [
    //     'web' => [
    //         \App\Http\Middleware\EncryptCookies::class,
    //         \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
    //         \Illuminate\Session\Middleware\StartSession::class,
    //         \Illuminate\Session\Middleware\AuthenticateSession::class,
    //         \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    //         \Illuminate\Routing\Middleware\SubstituteBindings::class,
    //     ],

    //     'api' => [
    //         \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,  // Middleware de Sanctum
    //         'throttle:api',  // Limitar las peticiones a la API
    //         \Illuminate\Routing\Middleware\SubstituteBindings::class,  // Sustituir los bindings
    //     ],
    // ];

    // /**
    //  * The application's route middleware.
    //  *
    //  * These middleware may be assigned to individual routes.
    //  *
    //  * @var array
    //  */
    // protected $routeMiddleware = [
    //     'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
    //     'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    //     'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
    //     'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
    //     'can' => \Illuminate\Auth\Middleware\Authorize::class,
    //     'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    //     'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
    //     'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
    //     'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    //     'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    //     'auth.sanctum' => \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,  // Agregar middleware de Sanctum para autenticación
    // ];
}
