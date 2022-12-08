<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PaisSeeder;
use Database\Seeders\IdiomaSeeder;

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
        $this->call(ProfesionSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(IdiomaSeeder::class);
    }
}
