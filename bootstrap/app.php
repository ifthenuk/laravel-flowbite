<?php

use Illuminate\Support\Str;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        if (app()->environment('production')) {
            $errorId = (string) Str::uuid();
            session(['last_error_id' => $errorId]);
            $exceptions->context(fn() => [
                'errorId' => $errorId,
            ]);
        }
    })->create();
