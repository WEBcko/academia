<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Login\RegisterController;
use App\Http\Controllers\Site\SiteController;

Route::get('/', function () {
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/sidebarLayout', [RegisterController::class, 'index']);
//HOME CONTROLLER^^

Route::get('/home', [SiteController::class, 'action']);
Route::get('/login',[RegisterController::class, 'logar']);

