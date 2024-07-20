<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
    return view('Home', [
        "title" => "Home",
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Binti Kholifah",
        "email" => "bintikholifah0123@gmail.com",
        "image" => "foto.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Halaman Kategori
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// Halaman Post berdasarkan Kategori
Route::get('categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category', 'author'),
    ]);
});


Route::get('/statistic', function () {
    return view('statistic', [
        "title" => "Statistic",
        "active" => 'statistic',
        "tayang" => "Penayangan: 1000",
        "followers" => "Followers: 600"
    ]);
});
 
Route::get('/help', function () {
    return view('help',[
        "title" => "Help",
        "active" => 'help',
    ]);
});