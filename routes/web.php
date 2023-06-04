<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GrupoMuscularController;

Route::get('/', function () {
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/act', [LoginController::class, 'act'])->name('login.act');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.create');

Route::get('/users', [UserController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/sidebarLayout', [RegisterController::class, 'index']);
//HOME CONTROLLER^^

Route::get('/home', [SiteController::class, 'action']);
Route::get('/login',[RegisterController::class, 'logar']);


Route::get('/grupo', [GrupoMuscularController::class, 'index'])->name('grupo');

Route::get('/contato', function(){
    return view('site.contact');
});
