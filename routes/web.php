<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
})->middleware('auth'); // protege a rota principal

Route::get('/login', function () {
    return view('login');
})->name('login'); // nomeie a rota de login para facilitar o redirecionamento

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/config', [App\Http\Controllers\ConfigController::class, 'deploy']); // nomeie a rota de login para facilitar o redirecionamento
