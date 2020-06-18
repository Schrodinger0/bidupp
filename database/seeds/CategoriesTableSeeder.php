<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Activite',
            'slug' => 'Activite'
        ]);

        Category::create([
            'name' => 'Beaute',
            'slug' => 'Beaute'
        ]);

        Category::create([
            'name' => 'Formation',
            'slug' => 'Formation'
        ]);

        Category::create([
            'name' => 'Gastronomie',
            'slug' => 'Gastronomie'
        ]);

        Category::create([
            'name' => 'Hotel',
            'slug' => 'Hotel'
        ]); 

         Category::create([
            'name' => 'Sport',
            'slug' => 'Sport'
        ]); 

         Category::create([
            'name' => 'Shopping',
            'slug' => 'Shopping'
        ]);

      
    }
}
