<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $fillable = [
        "student_id","month",
        "seance","apsence","precent",
        "date"
    ];

    //relation to studetn table 
    public function students() {
        return $this->belongsTo(Student::class, "student_id");
    }
}
