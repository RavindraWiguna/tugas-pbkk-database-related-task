<?php

use App\Http\Controllers\ArticleController;
use App\Models\Category;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{article:slug}', [ArticleController::class, 'content']);
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'articles' => $category->articles,
        'category' => $category->name
    ]);    
});
Route::get('/categories', function(){
    return view('categories', [
        'title' => "Seluruh Kategori",
        'categories' => Category::all()
    ]);
});