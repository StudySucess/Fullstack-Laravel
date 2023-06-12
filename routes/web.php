<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/regAlt', function () {
    return view('auth._register');
});


Route::get('/', function () {
    return view('index');
});

Route::get('classes', function () {
    return view('classes');
});

Route::get('experiences', function () {
    return view('experiences');
});

Route::get('search', function () {
    return view('search');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});


Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/posts', PostController::class);

Auth::routes();
