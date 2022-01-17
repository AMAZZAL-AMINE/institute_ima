<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    //relation to studetn table 
    public function students() {
        return $this->belongsTo(Student::class, "student_id");
    }
}
