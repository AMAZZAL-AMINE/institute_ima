<?php

namespace Database\Seeders;

use App\Models\LemploiIma;
use Illuminate\Database\Seeder;
use Database\Seeders\LemploiImaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // LemploiIma::factory(10)->create();
        $this->call([
            LemploiImaSeeder::class,
        ]);
       
    }
}
