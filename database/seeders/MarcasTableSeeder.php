<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Marca;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MarcasTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,50) as $index) {
            Marca::create([
                'nombre' => $faker->company,
            ]);
        }
    }
}
