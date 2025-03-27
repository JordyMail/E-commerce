<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware
    ];

    protected $middlewareGroups = [
        'web' => [
            // Web middleware
        ],

        'api' => [
            // API middleware
        ],
    ];

    protected $routeMiddleware = [
        // Other route middleware
        'role' => \App\Http\Middleware\RoleMiddleware::class, // Registering RoleMiddleware
    ];
}
