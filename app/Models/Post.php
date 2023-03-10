<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
            [
                'title' => 'Belajar Laravel 8',
                'slug' => 'belajar-laravel-8',
                'author' => 'Doddy',
                'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, aliquam pariatur. Libero voluptates, culpa magni asperiores nihil enim nemo, ab, odio ut dignissimos voluptas. Numquam, alias rerum dicta, velit eaque dolorem accusantium veritatis reprehenderit eligendi optio nulla quaerat voluptatibus nihil aperiam quidem nisi expedita eum delectus impedit quod. Dolorum quam, quibusdam sint et natus vel at eius alias? Ducimus, minima. Ducimus soluta officiis architecto earum nostrum ipsa quis. A, neque officia. Culpa accusamus corporis veritatis quae eaque! Odit, tempora facilis?'
            ],
            [
                'title' => 'Belajar React JS',
                'slug' => 'belajar-react-js',
                'author' => 'Ammar',
                'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, aliquam pariatur. Libero voluptates, culpa magni asperiores nihil enim nemo, ab, odio ut dignissimos voluptas. Numquam, alias rerum dicta, velit eaque dolorem accusantium veritatis reprehenderit eligendi optio nulla quaerat aperiam quidem nisi expedita eum delectus impedit quod. Dolorum quam, quibusdam sint et natus vel at eius alias? Ducimus, minima. Ducimus soluta officiis architecto earum nostrum ipsa quis. A, neque officia. Culpa accusamus corporis veritatis quae eaque! Odit, tempora facilis? voluptatibus nihil aperiam quidem nisi expedita eum delectus impedit quod. Dolorum quam, quibusdam sint et natus vel at eius alias? Ducimus, minima. Ducimus soluta officiis architecto earum nostrum ipsa quis. A, neque officia. Culpa accusamus corporis veritatis quae eaque! Odit, tempora facilis?'
            ]
        ];

    public static function all() {
        // pake self karena properti static
        // kalo properti biasa pemanggilannya yaitu $this->blog_posts
        return self::$blog_posts;
    }

    public static function find($slug) {
        // ambil dulu semua post
        $posts = self::$blog_posts;

        // mencari data berdasarkan slug
        // looping satu persatu jika slug ketemu dan dimasukkan ke $post
        $post = [];
        foreach($posts as $p) {
            if($p['slug'] === $slug){
                $post = $p;
            }
        }
        return $post;
    }
}
