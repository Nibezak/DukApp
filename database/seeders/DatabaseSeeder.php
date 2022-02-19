<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\User;
use   App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
User::truncate();
Post::truncate();


$user = User::factory()->create();
 $post = Post::factory(5)->create();
    }
}
