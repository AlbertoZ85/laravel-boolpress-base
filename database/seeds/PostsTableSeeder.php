<?php

use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $users = User::all();

        for ($i = 0; $i < 50; $i++) {
            $newPost = new Post; # Post anche senza parentesi

            $newPost->title = $faker->text(50);
            $newPost->body = $faker->text(500);
            $newPost->user_id = $users->random()->id;

            $newPost->save();
        }
    }
}
