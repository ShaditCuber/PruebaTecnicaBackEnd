<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Bodega;
use Faker\Factory as Faker;

class BodegasTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Bodega::create([
                'nombre' => $faker->company, 
            ]);
        }
    }
}
