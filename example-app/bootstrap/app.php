<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RoleMiddleware;
// use Illuminate\Foundation\Http\Middleware\TrimStrings;

return Application::configure(basePath: dirname(__DIR__))
->withRouting(
    web: __DIR__ . '/../routes/web.php',
    commands: __DIR__ . '/../routes/console.php',
    health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // 追加
        // $middleware->append(TrimStrings::class);

        $middleware->alias([
            'admin' => RoleMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
