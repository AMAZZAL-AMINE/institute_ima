<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    //relation ship to student table model
    public function students() {
        return $this->hasMany(Student::class);
    }
}
