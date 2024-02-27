<?php

namespace App;


class post_1 
{
    private static $blog_post = [
        [
            "title" => "Konten pertama",
            "slug" => "judul-tulisan-pertama",
            "image" => "/nunez.jpg",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique animi iure, repellat quo earum quaerat quasi voluptas illum quia perferendis delectus doloremque aperiam ad quas explicabo? Assumenda perspiciatis eius reprehenderit saepe iusto harum a dolor impedit, facere accusamus doloremque beatae natus aut ad aliquam odit deserunt necessitatibus laudantium tempora. Sed."
        ],
        [
            "title" => "Konten kedua",
            "slug" => "judul-tulisan-kedua",
            "image" => "/Onana.jpg",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur molestiae aspernatur maiores, beatae saepe temporibus consequatur at? Repellat repellendus expedita adipisci quia ipsam commodi veritatis, nemo excepturi nam delectus in ullam dolore eligendi modi tempora voluptatem minus praesentium numquam reprehenderit. Fugiat, magnam vero. Corporis ipsa at amet animi vero dolorum?"
        ]
    ];
    public static function all() {
        return collect(self::$blog_post);
    }
    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts -> firstWhere('slug', $slug);
    }
}
