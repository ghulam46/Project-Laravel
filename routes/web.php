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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'name' => 'Yanuar Ammar Ghulam',
        'email' => 'ghulam.123@gmail.com'
    ]);
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/blog', function () {
    return view('blog');
});
