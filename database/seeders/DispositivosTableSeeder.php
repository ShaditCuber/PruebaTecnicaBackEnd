<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dispositivo;
use App\Models\Bodega;
use App\Models\Modelo;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DispositivosTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $bodegaIds = Bodega::pluck('bodega_id')->toArray();
        $modeloIds = Modelo::pluck('modelo_id')->toArray();

        foreach (range(1, 100) as $index) {
            Dispositivo::create([
                'nombre' => $faker->word,
                'bodega_id' => $faker->randomElement($bodegaIds),
                'modelo_id' => $faker->randomElement($modeloIds),
            ]);
        }
    }
}
