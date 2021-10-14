<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Roby F Habibie",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio praesentium quidem fuga vel eveniet repellat tempore, ut magni. Iusto, vel provident atque illo doloribus autem illum porro recusandae quas reiciendis laborum veniam a incidunt, in similique quia quo. Accusamus iure voluptas quasi dignissimos autem qui eos. Doloremque voluptatum aut et fugit consequuntur, repellat totam recusandae suscipit possimus fugiat officia veritatis beatae nobis eveniet temporibus praesentium tempore minima, dicta quis maxime."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Thomas Shelby",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa natus laudantium beatae esse ipsam corporis numquam necessitatibus, corrupti distinctio! Voluptates nisi itaque harum quam. Quod mollitia accusamus maiores nemo placeat commodi iure itaque cumque nam non sapiente quae nihil error, dolores aut totam dolorem corporis repellendus sed rem optio! Esse eligendi quidem perferendis voluptas qui, sunt veritatis aliquid accusantium architecto inventore, ratione quam dolores at nulla fugit iure vitae ipsum iste autem eius totam nam? Quae voluptas rerum reiciendis, quo deserunt ipsam quam consequatur dolor ipsum, minima, nisi quaerat rem."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}