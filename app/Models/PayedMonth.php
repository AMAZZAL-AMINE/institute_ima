<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayedMonth extends Model
{
    use HasFactory;

    //rltionship to table users  model
    public function users() {
        return $this->belongsTo(User::class);
    }
}
