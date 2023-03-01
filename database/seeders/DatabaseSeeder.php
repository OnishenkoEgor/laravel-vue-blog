<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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
        Category::factory(10)->create();
        $tags = Tag::factory(10)->create();
        $posts = Post::factory(100)->create();

        foreach ($posts as $post) {
            $random_tags = $tags->random(3)->pluck('id');
            $post->tags()->attach($random_tags);
        }
    }
}
