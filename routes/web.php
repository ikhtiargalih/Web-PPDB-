<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Middleware;
use App\Http\Controllers\PpdbController;

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
    return view('landing.index');
});

Route::middleware('isGuest')->group(function(){
    Route::get('/login', [PpdbController::class, 'login'])->name('login');
    Route::get('/login/user', [PpdbController::class, 'register'])->name('register');
    Route::post('/login/user/store', [PpdbController::class, 'registerAccount'])->name('register.store');
    Route::post('/login/auth', [PpdbController::class, 'auth'])->name('login.auth');
});
//Auth

Route::middleware('isLogin', 'checkRole:user')->group(function(){
    Route::get('/dashboard/student', [PpdbController::class, 'dashboardStudent']);
    Route::get('/student', [PpdbController::class, 'contentStudent']);
    Route::get('/pembayaran', [PpdbController::class, 'contentPembayaran']);
    Route::post('/pembayaran/store', [PpdbController::class, 'store'])->name('pembayaran.store');

});

Route::middleware('isLogin', 'checkRole:admin')->group(function(){
    Route::get('/dashboard/admin', [PpdbController::class, 'dashboardAdmin']);
});


Route::get('/logout', [PpdbController::class, 'logout'])->name('logout');