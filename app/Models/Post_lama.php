<?php

namespace App\Models;

class Post 
{
    private static $blog_post = [
        [
            "judul" => "Blogs Pertama",
            "slug"  => "blog-pertama",
            "author" => "Yodantya",
            "blog"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minus odio dolor consectetur vel. Magnam commodi id atque reiciendis rem libero est deserunt consequuntur suscipit doloribus, assumenda expedita molestias eos?"
        ],
        [
            "judul" => "Blogs Kedua",
            "slug"  => "blog-kedua",
            "author" => "Sambodo",
            "blog"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non in facere commodi magni! Facilis unde ullam aliquid tenetur sint blanditiis incidunt rem tempore praesentium! Sint non illo excepturi ratione hic? Similique ullam recusandae animi omnis rerum voluptates voluptatum ea incidunt dolores, repellendus autem minus consectetur ex corrupti aliquid? Perspiciatis possimus dicta porro dolorum harum inventore officia voluptas voluptates numquam quod blanditiis eaque provident nam, recusandae quas adipisci nostrum doloribus veritatis quisquam libero nulla. Iusto dolor id suscipit iste dicta consectetur."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    { 
        $newpost = static::all();
        // $newpost = [];
        // foreach ($post as $p) {
        //     if ($p["slug"]==$slug) {
        //         $newpost = $p;
        //     }
        // }

        return $newpost->firstWhere('slug', $slug);
    }
}
