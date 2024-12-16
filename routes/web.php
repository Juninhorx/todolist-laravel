<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [mainController::class, 'home'])->name('home');


Route::get('/singin', [mainController::class, 'singin'])->name('singin');
Route::get('/login', [mainController::class, 'login'])->name('login');


Route::post('/singinSubmit', [UserController::class, 'singinSubmit'])->name('singinSubmit');
Route::post('/loginSubmit', [AuthController::class, 'loginSubmit'])->name('loginSubmit');

