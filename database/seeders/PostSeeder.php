<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $post = new Post();
            $post->title = $faker->words(3, true);
            $post->cover_image = $faker->imageUrl(600, 400, 'Articles', true, $post->title, true);
            $post->content = $faker->text();
            $post->save();
        }
    }
}
