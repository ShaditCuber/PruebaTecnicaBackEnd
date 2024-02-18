<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MarcasTableSeeder::class);
        $this->call(BodegasTableSeeder::class);
        $this->call(ModelosTableSeeder::class);
        $this->call(DispositivosTableSeeder::class);
    }
}
