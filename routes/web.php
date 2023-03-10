<?php

use App\Models\Post;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio', [
        'title' => 'Portfolio'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Ghulam Ammar Yanuar',
        'email' => 'ghulam.yanuar01@gmail.com',
        'image' => '3x4.png',
        'title' => 'About'
    ]);
});

Route::get('/posts', function () {

    return view('posts', [
        'title' => 'Blog',
        // Post = Model & all() = method
        'posts' => Post::all()
    ]);
});

// halaman single post
Route::get('/post/{slug}', function($slug) {
    return view('post', [
        'title' => 'Single Post',
        'post' => Post::find($slug)
    ]);
});
