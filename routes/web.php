<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::view('/', "login") -> name('login');
Route::get('/welcome', function () {
    return view('dashboard');
})-> name('dashboard'); 
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');

Route::post('/logout', [LoginController::class, 'logout']) -> name('logout');

