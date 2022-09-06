<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(100)->create();

        foreach($posts as $p){

            Image::factory(1)->create([
                'imageable_id' => $p->id,
                'imageable_type' => Post::class
            ]);

            $p->tags()->attach([
                rand(1, 4),
                rand(5, 8)
            ]);
        }
    }
}
