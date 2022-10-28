<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SmallArticleController;
use App\Models\Article;
use App\Models\Author;
use App\Models\SmallArticle;
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

Route::get('/', [ArticleController::class, 'index']);
Route::get('/NewArticle', [ArticleController::class, 'create']);
Route::get('/newsmallarticle', [SmallArticleController::class, 'create']);
Route::get('/FullArticle/{id}', [ArticleController::class, 'show']);
Route::post('/articles/store', [ArticleController::class, 'store']);
Route::post('/smallarticles/store', [SmallArticleController::class, 'store']);

Route::get('/BackOffice', function () {
    $article = Article::all();
    $smallarticles = SmallArticle::all();
    return view('pages.backOffice', compact('article', 'smallarticles'));
});

Route::delete('/articles/delete/{id}', [ArticleController::class, 'destroy']);
Route::delete('/smallarticles/delete/{id}', [SmallArticleController::class, 'destroy']);
Route::get('/articles/edit/{id}', [ArticleController::class, 'edit']);
Route::put('/articles/update/{id}', [ArticleController::class, 'update']);
Route::get('/smallarticles/edit/{id}', [SmallArticleController::class, 'edit']);
Route::put('/smallarticles/update/{id}', [SmallArticleController::class, 'update']);

Route::get('/smallarticles', [SmallArticleController::class, 'index']);
