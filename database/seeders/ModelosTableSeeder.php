<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Modelo;
use App\Models\Marca;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ModelosTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $marcaIds = Marca::pluck('marca_id')->toArray();
        foreach (range(1, 100) as $index) {
            Modelo::create([
                'nombre' => $faker->word,
                'marca_id' => $faker->randomElement($marcaIds),
            ]);
        }
    }
}
