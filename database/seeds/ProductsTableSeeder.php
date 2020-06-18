<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 30; $i++) {
            Product::create([
                'title' => $faker->sentence(1),
                'slug' => $faker->slug,
                'subtitle' => $faker->sentence(3),
                'categorie' => $faker->sentence(1),
                'ville' => $faker->sentence(1),
                'description' => $faker->text,
                'price' => $faker->numberBetween(15, 300),
                'duration' => $faker->numberBetween(15, 300),
                'image' => '//imgur.com/a/WhaAC9O'
            ])->categories()->attach([
                rand(1, 4),
                rand(1, 4)
            ]);
            
         
        }
        
    }
}
