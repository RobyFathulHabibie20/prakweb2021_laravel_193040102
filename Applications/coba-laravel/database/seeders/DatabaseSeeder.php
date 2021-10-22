<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
     /*   User::create([
            'name' => 'Roby Fathul Habibie',
            'email' => 'robyhabibie@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Sandhika Galih',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt('12345')
        ]); */

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]); 

        Post::factory(20)->create(); 

    /*    Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum Delectus nemo ad, dicta fuga lkajio omnis soluta modi vitae at laboriosam. Quae accusamus velita odit hic quaerat maiores.',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus nemo ad, dicta fuga lkajio omnis soluta modi vitae at laboriosam. Alias at quis beatae iusto eos. Quae accusamus velita odit hic quaerat maiores. Fugit nihil officia reiciendis eligendi tempora! Aspernaturdiandae,quod officiis deserunt doloribus sed,</p><p> fugiat culpa at deleniti, ab in facilis voluptate?omnis voluptatibus alias molestiae! Voluptates voluptatibus laudantium beatae accusamus aperiam. ew Sit nisi voluptates nesciunt porro magni iste eligendi, placeat voluptatem repellat, ut alias laudantium id. Suscipit saepe harum ducimus necessitatibus ex porro maiores quia doloribus ghaccusantium,</p><p>eius alias dolorum officiis dicta corporis vero. Numquam porro quod amet iure exodit hic quaerat maiores. Fugit nihil officia reiciendis eligendi tempora! Aspernaturdiandae, tenetur possimus exercitationem dicta. Alias nesciunt eius odio quo quisquam ipsa tempore id?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum Delectus nemo ad, dicta fuga lkajio omnis soluta modi vitae at laboriosam. Quae accusamus velita odit hic quaerat maiores.',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus nemo ad, dicta fuga lkajio omnis soluta modi vitae at laboriosam. Alias at quis beatae iusto eos. Quae accusamus velita odit hic quaerat maiores. Fugit nihil officia reiciendis eligendi tempora! Aspernaturdiandae,quod officiis deserunt doloribus sed,</p><p> fugiat culpa at deleniti, ab in facilis voluptate?omnis voluptatibus alias molestiae! Voluptates voluptatibus laudantium beatae accusamus aperiam. ew Sit nisi voluptates nesciunt porro magni iste eligendi, placeat voluptatem repellat, ut alias laudantium id. Suscipit saepe harum ducimus necessitatibus ex porro maiores quia doloribus ghaccusantium,</p><p>eius alias dolorum officiis dicta corporis vero. Numquam porro quod amet iure exodit hic quaerat maiores. Fugit nihil officia reiciendis eligendi tempora! Aspernaturdiandae, tenetur possimus exercitationem dicta. Alias nesciunt eius odio quo quisquam ipsa tempore id?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum Delectus nemo ad, dicta fuga lkajio omnis soluta modi vitae at laboriosam. Quae accusamus velita odit hic quaerat maiores.',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus nemo ad, dicta fuga lkajio omnis soluta modi vitae at laboriosam. Alias at quis beatae iusto eos. Quae accusamus velita odit hic quaerat maiores. Fugit nihil officia reiciendis eligendi tempora! Aspernaturdiandae,quod officiis deserunt doloribus sed,</p><p> fugiat culpa at deleniti, ab in facilis voluptate?omnis voluptatibus alias molestiae! Voluptates voluptatibus laudantium beatae accusamus aperiam. ew Sit nisi voluptates nesciunt porro magni iste eligendi, placeat voluptatem repellat, ut alias laudantium id. Suscipit saepe harum ducimus necessitatibus ex porro maiores quia doloribus ghaccusantium,</p><p>eius alias dolorum officiis dicta corporis vero. Numquam porro quod amet iure exodit hic quaerat maiores. Fugit nihil officia reiciendis eligendi tempora! Aspernaturdiandae, tenetur possimus exercitationem dicta. Alias nesciunt eius odio quo quisquam ipsa tempore id?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum Delectus nemo ad, dicta fuga lkajio omnis soluta modi vitae at laboriosam. Quae accusamus velita odit hic quaerat maiores.',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus nemo ad, dicta fuga lkajio omnis soluta modi vitae at laboriosam. Alias at quis beatae iusto eos. Quae accusamus velita odit hic quaerat maiores. Fugit nihil officia reiciendis eligendi tempora! Aspernaturdiandae,quod officiis deserunt doloribus sed,</p><p> fugiat culpa at deleniti, ab in facilis voluptate?omnis voluptatibus alias molestiae! Voluptates voluptatibus laudantium beatae accusamus aperiam. ew Sit nisi voluptates nesciunt porro magni iste eligendi, placeat voluptatem repellat, ut alias laudantium id. Suscipit saepe harum ducimus necessitatibus ex porro maiores quia doloribus ghaccusantium,</p><p>eius alias dolorum officiis dicta corporis vero. Numquam porro quod amet iure exodit hic quaerat maiores. Fugit nihil officia reiciendis eligendi tempora! Aspernaturdiandae, tenetur possimus exercitationem dicta. Alias nesciunt eius odio quo quisquam ipsa tempore id?</p>',
            'category_id' => 2,
            'user_id' => 2
        ]); */
    }
}
