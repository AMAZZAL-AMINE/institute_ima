<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsImaOrIphec extends Model
{
    use HasFactory;
    protected $fillable = [
        "institute","student_id"
    ];

    public function students() {
        return $this->belongsTo(Student::class, "student_id");
    }
}
