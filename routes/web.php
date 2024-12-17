<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;


Route::middleware([CheckIsNotLogged::class])->group(function () {

    Route::get('/singin', [MainController::class, 'singin'])->name('singin');
    Route::get('/login', [MainController::class, 'login'])->name('login');
    Route::post('/singinSubmit', [UserController::class, 'singinSubmit'])->name('singinSubmit');
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit'])->name('loginSubmit');
});




Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/newNoteSubmit', [MainController::class, 'newNoteSubmit'])->name('newNoteSubmit');
});
