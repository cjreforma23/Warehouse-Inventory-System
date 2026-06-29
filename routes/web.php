<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/login', [App\Http\Controllers\Authcontroller::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Authcontroller::class, 'login']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function()){
    return view('dashboard');
})->middleware('auth');
