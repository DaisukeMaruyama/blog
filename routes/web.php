<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PostController::class, 'index'])
  ->name('posts.index');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])
  ->name('posts.show');

Route::get('/categories/{post:slug}', [CategoryController::class, 'index'])
  ->name('categories.index');

Route::get('/users/{user}', [UserController::class, 'show'])
  ->name('users.show')
  ->where('user', '[0-9]+');
