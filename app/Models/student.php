<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //relationship to user table model
    public function users() {
        return $this->belongsTo(User::class, "user_id");
    }

    //relation to fomations tanle model
    public function fomations() {
        return $this->belongsTo(Fomations::class, "fomation_id");
    }

}
