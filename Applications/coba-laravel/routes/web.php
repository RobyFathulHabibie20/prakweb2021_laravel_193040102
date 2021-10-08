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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Roby Fathul Habibie",
        "email" => "robyturbidity456@gmail.com",
        "image" => "me.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halamna Single Posts
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});