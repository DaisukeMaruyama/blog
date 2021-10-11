<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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

Route::post('/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])
  ->name('categories.show');

Route::get('/users/{user}', [UserController::class, 'show'])
  ->name('users.show')
  ->where('user', '[0-9]+');

  //Only guests are able to access
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
