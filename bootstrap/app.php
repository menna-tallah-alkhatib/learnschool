<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\IsTeacher;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsStudent;
use App\Http\Middleware\Authenticate;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'teacher' => IsTeacher::class,
            'admin' => IsAdmin::class,
            'student' => IsStudent::class,
            // 'auth' => Authenticate::class,


        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
