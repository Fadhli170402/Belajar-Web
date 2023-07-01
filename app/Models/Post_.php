<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
class Post
{
    // use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Fadhli Adhliana",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                       Aspernatur porro qui odio. Maiores accusamus vel similique 
                       eligendi sapiente, nemo nam illo provident porro numquam alias
                       magnam nostrum! Omnis, recusandae! Mollitia voluptas iusto laborum, 
                       quam sequi odit hic amet dolorem sapiente in ad ut dolor nihil soluta vero esse, 
                       assumenda porro molestiae dignissimos suscipit deserunt animi? Necessitatibus expedita iste ipsum quas.
                       Alias, nulla dolor? Fugiat fugit ab eius sit, hic facilis nesciunt amet dolore vero perspiciatis atque nam odit modi doloremque."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Dea Kurniasih",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                       Aspernatur porro qui odio. Maiores accusamus vel similique 
                       eligendi sapiente, nemo nam illo provident porro numquam alias
                       magnam nostrum! Omnis, recusandae! Mollitia voluptas iusto laborum, 
                       quam sequi odit hic amet dolorem sapiente in ad ut dolor nihil soluta vero esse, 
                       assumenda porro molestiae dignissimos suscipit deserunt animi? Necessitatibus expedita iste ipsum quas.
                       Alias, nulla dolor? Fugiat fugit ab eius sit, hic facilis nesciunt amet dolore vero perspiciatis atque nam odit modi doloremque."
        ]

    ];

    public static function all()
    {
        return collect(
            self::$blog_posts
        );
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
