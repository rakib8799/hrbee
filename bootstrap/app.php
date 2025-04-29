<?php

use Sentry\Laravel\Integration;
use App\Http\Middleware\IsSlugPresent;
use Illuminate\Foundation\Application;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            HandleInertiaRequests::class,
        ]);
        
        // Middleware aliases
        $middleware->alias([
            'slug.present' => IsSlugPresent::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Integration::handles($exceptions);
    })->create();
