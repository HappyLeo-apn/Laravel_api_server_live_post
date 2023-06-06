<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::
        name('comments.')
        ->group(function(){
            Route::get('/comments',[CommentController::class, 'index'])->name('index');
            Route::get('/comments/{comment}', [CommentController::class, 'show'])->name('show')
            ->whereNumber('comment');

            Route::post('/comments', [CommentController::class, 'store'])->name('store');
            Route::patch('/comments', [CommentController::class, 'update'])->name('update');
            Route::delete('/comments', [CommentController::class, 'destroy'])->name('destroy');

        });
