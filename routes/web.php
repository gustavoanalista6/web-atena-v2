<?php

use Illuminate\Support\Facades\Auth;
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
})->middleware('auth'); 

Route::get('/login', function () {
    return view('login');
})->name('login'); 

Auth::routes(['register' => false]); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/config', [App\Http\Controllers\ConfigController::class, 'deploy']); 

Route::get('/politicas', [App\Http\Controllers\PoliticaController::class, 'index'])->name('policies'); 
Route::get('/politica-privacidade', [App\Http\Controllers\PoliticaController::class, 'privacy_policy'])->name('privacy-policy'); 
Route::get('/termos-uso', [App\Http\Controllers\PoliticaController::class, 'terms_use'])->name('terms-use'); 
Route::get('/politica-cookies', [App\Http\Controllers\PoliticaController::class, 'policy_cookies'])->name('policy-cookies'); 
