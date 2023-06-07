<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GrupoMuscularController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminAccess;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\PreventLoginAccess;


Route::get('/', function () {
});
Route::get('/home', function(){
    Route::get('/home', [HomeController::class, 'index'])->name ('home');
})->middleware(Authenticate::class);

Route::get('/home', function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
})->middleware(PreventLoginAccess::class);

//NÃO APAGAR: Função para adicionar o middleware em um grupo de rotas
// Route::get('/login', function(){
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login/act', [LoginController::class, 'act'])->name('login.act');
// })->middleware(AdminAccess::class,PersonalAccess::class); Onde chamamos a class dos middlewares desejados (pode ser mais de um em um grupo de rotas)


Route::post('/login/act', [LoginController::class, 'act'])->name('login.act');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.create');

Route::get('/users', [UserController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);



// Route::get('/login', function(){
//     Route::get('/login',[RegisterController::class, 'logar']);
// })->middleware(AdminAccess::class, PersonalAccess::class);


Route::get('/grupo', [GrupoMuscularController::class, 'index'])->name('grupo');

Route::get('/contato', function(){
    return view('site.contact');
});


