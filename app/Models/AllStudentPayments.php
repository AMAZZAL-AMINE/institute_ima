<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllStudentPayments extends Model
{
    use HasFactory;
    protected $guarded = array();

    public function students() {
        
        return $this->belongsTo(Student::class, 'student_id');
    }
}