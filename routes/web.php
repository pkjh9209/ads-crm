<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::namespace('Admin')->group(function () {
    Route::prefix('admin')->group(function () {
        //로그인
        Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
        //회원가입
        Route::get('register', 'RegisterController@showRegistrationForm')->name('admin.register');
        Route::post('register', 'RegisterController@register');
        Route::get('home', 'HomeController@index')->name('admin.home');
        //패스워드확인
        Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm');
        Route::post('password/confirm', 'ConfirmPasswordController@confirm');
        //패스워드리셋
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset')->name('admin.password.update');
    });
});

require __DIR__ . '/auth.php';
