<?php

namespace Database\Seeders;

use Faker\Generator as Faker; // importamos el componente faker para crear datos aleatorios
use Illuminate\Database\Seeder; // importamos el seeder para poder extender la clase
use Illuminate\Support\Facades\DB; // Importamos el componente DB para poder llamar a los métodos de inserción de datos a tablas
use Illuminate\Support\Str; // importamos el componente Str para poder crear strings aleatorios

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for($i = 0; $i < 10; $i++){
            DB::table('posts')->insert([
                'title' => $faker->name,
                'body' => $faker->paragraph(),
                'image' => Str::random(60),
            ]);
        }
    }
}
