<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\VakController;
use App\Http\Controllers\UserController;


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


//static
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
});

Route::get('experiences', function () {
    return view('experiences');
});

//users
Route::get('/users/{username}', [UserController::class, 'show'])->name('user');
Route::get('/profile/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/profile/edit', [UserController::class, 'update'])->name('user.update');    

Route::resource('/posts', PostController::class);

Auth::routes();

//courses
Route::get('/courses', [VakController::class, 'index'])->name('courses');
Route::get('/courses/{name}', [VakController::class, 'show'])->name('courses.show');
Route::get('/courses/create', [VakController::class, 'create'])->name('courses.create');

Route::get('/search', [searchController::class, 'search'])->name('search');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');