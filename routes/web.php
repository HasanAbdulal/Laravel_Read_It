<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
// Route par Défaut
Route::get('/{post?}', [PostsController::class, 'show'])
    ->defaults('post', 1)
    ->name('homepage');

// Détail d'une Page
Route::get('/posts/{post}/{slug}', [PostsController::class, 'show'])
    ->name('posts.show');