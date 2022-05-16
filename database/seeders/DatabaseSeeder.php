<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\ImageUrl;
use App\Models\Comment;
use App\Models\Restaurant;
use App\Models\Dish;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        //Restaurant::factory(10)-->create();
        //Dish::factory(100)->create();
        //Post::factory(10)->create();
        //Comment::factory(100)->create();
        //ImageUrl::factory(100)->create();
    }
}
