<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;

// Route::apiResource('users', UserController::class);

Route:://middleware('auth', )
    name('users.') // or I can also use ->as('users.')
    ->group(function () {
        Route::get(
            '/users',
            [UserController::class, 'index']
        )->name('index')
        ->withoutMiddleware('auth'); //excluded from middleware

        Route::get('/users/{user}', [UserController::class, 'show'])->name('show')
               ->where('user', '[0-9]+'); //or ->whereNumber('user'); --- they wall accpect only numeric values for {user}

        Route::post('/users', [UserController::class, 'store'])->name('store');

        Route::patch('/users', [UserController::class, 'update'])->name('update');
        Route::delete('/users', [UserController::class, 'destroy'])->name('destroy');
    });
