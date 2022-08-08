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


Auth::routes();


Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('index');
Route::post('/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// https://laravel.com/docs/8.x/routing#route-parameters
Route::get('/posts/user/{userId}', [\App\Http\Controllers\UserPostController::class, 'index'])->name('user.posts');
