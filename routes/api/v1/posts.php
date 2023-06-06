<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;


        Route::name('posts.')
        ->group(function(){
            Route::get('/posts', [PostController::class, 'index'])->name('index');
            Route::get('/posts/{post}', [PostController::class, 'show'])->name('show')
                   ->whereNumber('post');
            Route::post('/posts', [PostController::class, 'store'])->name('store');
            Route::patch('/posts/{post}', [PostController::class, 'update'])->name('update');
            Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('destroy');
        });
