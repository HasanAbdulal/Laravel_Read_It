<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;

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
Route::get('/', [PostsController::class, 'index'])
    ->name('homepage');

// Route par Défaut
Route::get('posts', [PostsController::class, 'index'])
    ->name('posts.index');

// Détail d'un post
Route::get('/posts/{post}/{slug}', [PostsController::class, 'show'])
    ->name('posts.show');

// Liste des tags
Route::get('/tags/{tag}/{slug}', [TagsController::class, 'show'])
    ->name('tags.show');


// Catégorie
// Route::get('/categories/{categorie}/{slug}', [CategoriesController::class, 'show'])
//     ->name('categories.show');
