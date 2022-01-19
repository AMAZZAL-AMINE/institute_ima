<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListDattent extends Model
{
    use HasFactory;


    //relationship to formation model
    public function formations() {
        return $this->belongsTo(Formation::class, "formation_id");
    }
}
