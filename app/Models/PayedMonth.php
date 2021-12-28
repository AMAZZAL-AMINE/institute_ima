<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayedMonth extends Model
{
    use HasFactory;

    protected $fillable   = [
        "student_id","prix","name","formation","students_name","student_cin"
    ];

    //rltionship to table users  model
    public function students() {
        return $this->belongsTo(Student::class, "student_id");
    }


}
