<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile_Controller;

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


Auth::routes();

Route::get('/index', function () {
    return view('index'); // call index
})->middleware('auth'); // login before use

Route::resource('/profiles', profile_Controller::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/page', [App\Http\Controllers\HomeController::class, 'page']);
Route::get('/form', [App\Http\Controllers\HomeController::class, 'form']);
