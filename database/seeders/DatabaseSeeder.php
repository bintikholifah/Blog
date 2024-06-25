<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Binti',
            'email' => 'bintikholifah1616@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'Kholifah',
            'email' => 'bintikholifah161616@gmail.com',
            'password' => bcrypt('1234')
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo velit explicabo blanditiis totam nesciunt aliquam qui sed! Reiciendis temporibus, debitis explicabo nam asperiores similique. Nihil, molestias.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo velit explicabo blanditiis totam nesciunt aliquam qui sed! Reiciendis temporibus, debitis explicabo nam asperiores similique. Nihil, molestias. Dicta quia corporis dolorem accusantium repudiandae atque earum beatae sequi optio officiis tempore blanditiis culpa mollitia laudantium ipsam odit facere voluptates ipsa architecto ipsum ad, et nobis? Culpa vel eaque obcaecati magnam porro, velit unde dolore dolor quos ipsam praesentium esse adipisci veritatis illum officiis quibusdam eligendi maiores pariatur quasi harum quod, voluptate ratione commodi. Exercitationem, hic ratione, laudantium quia nobis esse voluptas quaerat facere aliquid error animi consequuntur voluptatum, ipsa explicabo ullam?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo velit explicabo blanditiis totam nesciunt aliquam qui sed! Reiciendis temporibus, debitis explicabo nam asperiores similique. Nihil, molestias.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo velit explicabo blanditiis totam nesciunt aliquam qui sed! Reiciendis temporibus, debitis explicabo nam asperiores similique. Nihil, molestias. Dicta quia corporis dolorem accusantium repudiandae atque earum beatae sequi optio officiis tempore blanditiis culpa mollitia laudantium ipsam odit facere voluptates ipsa architecto ipsum ad, et nobis? Culpa vel eaque obcaecati magnam porro, velit unde dolore dolor quos ipsam praesentium esse adipisci veritatis illum officiis quibusdam eligendi maiores pariatur quasi harum quod, voluptate ratione commodi. Exercitationem, hic ratione, laudantium quia nobis esse voluptas quaerat facere aliquid error animi consequuntur voluptatum, ipsa explicabo ullam?',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo velit explicabo blanditiis totam nesciunt aliquam qui sed! Reiciendis temporibus, debitis explicabo nam asperiores similique. Nihil, molestias.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo velit explicabo blanditiis totam nesciunt aliquam qui sed! Reiciendis temporibus, debitis explicabo nam asperiores similique. Nihil, molestias. Dicta quia corporis dolorem accusantium repudiandae atque earum beatae sequi optio officiis tempore blanditiis culpa mollitia laudantium ipsam odit facere voluptates ipsa architecto ipsum ad, et nobis? Culpa vel eaque obcaecati magnam porro, velit unde dolore dolor quos ipsam praesentium esse adipisci veritatis illum officiis quibusdam eligendi maiores pariatur quasi harum quod, voluptate ratione commodi. Exercitationem, hic ratione, laudantium quia nobis esse voluptas quaerat facere aliquid error animi consequuntur voluptatum, ipsa explicabo ullam?',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
