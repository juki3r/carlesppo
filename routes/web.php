<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\LoginController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login_web', [LoginController::class, 'showLoginForm'])->name('login');

require __DIR__ . '/auth.php';
