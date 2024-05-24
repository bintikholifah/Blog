<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Binti Kholifah",
        "email" => "bintikholifah0123@gmail.com",
        "image" => "foto.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post
Route::get('posts/{slug}', [PostController::class, 'show']);

Route::get('/statistic', function () {
    return view('statistic', [
        "title" => "Statistic",
        "tayang" => "Penayangan: 1000",
        "followers" => "Followers: 600"
    ]);
});

Route::get('/help', function () {
    return view('help',[
        "title" => "Help"
    ]);
});