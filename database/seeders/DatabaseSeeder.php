<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Category;



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
        //$this->call(PostSeeder::class);

        $faker = \Faker\Factory::create();

        DB::table("users")->insert([
         ["name" => "ruben", "email" => "ruben@pepe.com", "password" => "password"],
         ["name" => "irene", "email" => "irene@pepe.com", "password" => "password"],
         ["name" => "jose", "email" => "jose@pepe.com", "password" => "password"] ]);

         DB::table("categories")->insert([
         ["nombre" => "Hardware"],
         ["nombre" => "Sotfware"],
         ["nombre" => "Robotica"]
         ]);

         $users = User::pluck('id');
         $cats = Category::pluck('id');

         DB::table("posts")->insert([
         "title" => $faker->title(),
         //"slugs" => $faker->word(),
         "image" => $faker->imageUrl(),
         "post" => $faker->text(),
         "user_id" => $faker->randomElement($users),
         "categories_id" => $faker->randomElement($cats),
         ]);

    }
}
