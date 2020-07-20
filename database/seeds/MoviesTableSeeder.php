<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newMovie = new Movie();
            $newMovie->title = $faker->sentence(3);
            $newMovie->overview = $faker->sentence(15);
            $newMovie->rating = $faker->randomFloat(1,4,10);
            $newMovie->save();
        }
    }
}
