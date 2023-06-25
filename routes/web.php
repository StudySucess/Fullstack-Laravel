<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VakController;


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

Route::get('/classes', [App\Http\Controllers\VakController::class, 'index'])->name('classes.index');

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

Route::get('/classes/{name}', [App\Http\Controllers\PostController::class, 'show'])->name('courses.show');

Route::get('/courses/create', [VakController::class, 'create'])->name('courses.create');
Auth::routes();
