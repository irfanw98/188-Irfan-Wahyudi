<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth'      => Illuminate\Auth\Middleware\Authenticate::class,
            'auth.session' => Illuminate\Session\Middleware\AuthenticateSession::class,
            'guest'     => Illuminate\Auth\Middleware\RedirectIfAuthenticated::class,
            'admin'     => App\Http\Middleware\Admin::class,
            'pimpinan'  => App\Http\Middleware\Pimpinan::class,
            'pegawai'   => App\Http\Middleware\Pegawai::class,
            // 'role'      => App\Http\Middleware\Role::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();