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
        'title' => 'Home'
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio', [
        'title' => 'Portfolio'
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            'title' => 'Belajar Laravel 8',
            'author' => 'Doddy',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, aliquam pariatur. Libero voluptates, culpa magni asperiores nihil enim nemo, ab, odio ut dignissimos voluptas. Numquam, alias rerum dicta, velit eaque dolorem accusantium veritatis reprehenderit eligendi optio nulla quaerat voluptatibus nihil aperiam quidem nisi expedita eum delectus impedit quod. Dolorum quam, quibusdam sint et natus vel at eius alias? Ducimus, minima. Ducimus soluta officiis architecto earum nostrum ipsa quis. A, neque officia. Culpa accusamus corporis veritatis quae eaque! Odit, tempora facilis?'
        ],
        [
            'title' => 'Belajar React JS',
            'author' => 'Ammar',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, aliquam pariatur. Libero voluptates, culpa magni asperiores nihil enim nemo, ab, odio ut dignissimos voluptas. Numquam, alias rerum dicta, velit eaque dolorem accusantium veritatis reprehenderit eligendi optio nulla quaerat aperiam quidem nisi expedita eum delectus impedit quod. Dolorum quam, quibusdam sint et natus vel at eius alias? Ducimus, minima. Ducimus soluta officiis architecto earum nostrum ipsa quis. A, neque officia. Culpa accusamus corporis veritatis quae eaque! Odit, tempora facilis? voluptatibus nihil aperiam quidem nisi expedita eum delectus impedit quod. Dolorum quam, quibusdam sint et natus vel at eius alias? Ducimus, minima. Ducimus soluta officiis architecto earum nostrum ipsa quis. A, neque officia. Culpa accusamus corporis veritatis quae eaque! Odit, tempora facilis?'
        ]
    ];


    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});
