<?php

namespace Database\Seeders;

use App\Models\LemploiIma;
use Illuminate\Support\Str;
use App\Models\LemploiIphec;
use Illuminate\Database\Seeder;

class LemploiImaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LemploiIphec::create(
            [
                'room_1' => Str::random(3),
                'room_2' => Str::random(3),
                'room_3' => Str::random(3),
                'room_4' => Str::random(3),
                'room_5' => Str::random(3),
                'room_6' => Str::random(3),
                'room_7' => Str::random(3),
                'room_8' => Str::random(3),
                'room_9' => Str::random(3),
            ]
        );
    }
}
