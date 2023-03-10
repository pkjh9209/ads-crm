<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use \App\Http\Controllers\Admin\BoardManagerController;
use \App\Http\Controllers\Admin\AdsLandingManagerController;
use \App\Http\Controllers\Admin\AdsMemberManagerController;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(static function () {

    // Guest routes
    Route::middleware('guest:admin')->group(static function () {
        // Auth routes
        Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])->name('admin.login');
        Route::post('login', [AdminAuthenticatedSessionController::class, 'store']);
        // Forgot password
        Route::get('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'create'])->name('admin.password.request');
        Route::post('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'store'])->name('admin.password.email');
        // Reset password
        Route::get('reset-password/{token}', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'create'])->name('admin.password.reset');
        Route::post('reset-password', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'store'])->name('admin.password.update');

        Route::get('adsmember', [AdsMemberManagerController::class, 'show'])->name('admin.member');

    });

    Route::middleware(['auth:admin'])->group(static function () {
        // Route::get('verify-email', [\App\Http\Controllers\Admin\Auth\EmailVerificationPromptController::class, '__invoke'])->name('admin.verification.notice');
        // Route::get('verify-email/{id}/{hash}', [\App\Http\Controllers\Admin\Auth\VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('admin.verification.verify');
        // Route::post('email/verification-notification', [\App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('admin.verification.send');
    });

    // Authenticated routes
    Route::middleware(['auth:admin', 'verified'])->group(static function () {
        // Confirm password routes
        Route::get('confirm-password', [\App\Http\Controllers\Admin\Auth\ConfirmablePasswordController::class, 'show'])->name('admin.password.confirm');
        Route::post('confirm-password', [\App\Http\Controllers\Admin\Auth\ConfirmablePasswordController::class, 'store']);
        // Logout route
        Route::post('logout', [\App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
        // General routes
        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.index');
        // Board manager content
        Route::get('contents', [BoardManagerController::class, 'index'])->name('admin.board-manager');
        

        // ????????? ?????????
        Route::prefix('adsmember')->group(static function () {
            Route::get('/', [AdsMemberManagerController::class, 'show'])->name('admin.member');  
        });

        // ?????? ?????????
        Route::prefix('landing')->group(static function () {
            Route::get('/', [AdsLandingManagerController::class, 'show'])->name('admin.landing.list');
            Route::get('/edit', [AdsLandingManagerController::class, 'edit'])->name('admin.landing.edit');
            Route::post('/create', [AdsLandingManagerController::class, 'create'])->name('admin.landing.create');
        });
    });

});
