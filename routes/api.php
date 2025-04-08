<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIS\{AuthController, VideoController};
use App\Http\Controllers\APIResponse;

Route::prefix('v1')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::prefix('auth')->group(function () {
            Route::post('/login', 'login');
            Route::post('/register', 'register');
            Route::post('/forgot-password', 'forgotPassword');
            Route::post('/reset-password', 'resetPassword');
            Route::post('/verify-email', 'verifyEmail');
            Route::post('/resend-verification', 'resendVerification');
            Route::middleware(['auth:sanctum'])->group(function () {
                Route::post('/logout', 'logout');
            });
        });
    });

    Route::controller(VideoController::class)->group(function () {
        Route::get('/videos', 'index');
        Route::get('/videos/{id}', 'show');
        Route::middleware(['auth:sanctum'])->group(function () {
            Route::post('/videos', 'store');
            Route::put('/videos/{id}', 'update');
        });
    });
});
