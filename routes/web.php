<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::view('/', 'Guest.login');

Route::post('/login-submit', [AuthController::class, "checkUser"])->name("login.submit");
