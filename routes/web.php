<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Login\RegisterController;
use App\Http\Controllers\Site\SiteController;

Route::get('/', function () {
    $nome = 'romario';
    $idade = 23;
    $arr = [10,20,30,40,55];

    return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'arr' => $arr
        ]);
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/sidebarLayout', function(){

    return view('layout.sidebar');
});

Route::get('/home', [SiteController::class, 'action']);
Route::get('/login',[RegisterController::class, 'logar']);

