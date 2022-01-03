<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LemploiIma extends Model
{
    use HasFactory;

    public function run() {
            User::factory()
                ->count(50)
                ->create();
    }
}
