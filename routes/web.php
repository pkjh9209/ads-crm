<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/admin', function () {
    return view('home');
})->middleware(['admin.auth'])->name('adminlogin');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/detect', function () {

//     if ($result)
//         return "Yes, This is Mobile.";
//     else
//         return "No, This is not Mobile.";
// });

require __DIR__ . '/auth.php';
