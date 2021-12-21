<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayedMonth extends Model
{
    use HasFactory;

    protected $fillable   = [
        "student_id","prix","month_id"
    ];

    //rltionship to table users  model
    public function students() {
        return $this->belongsTo(Student::class, "student_id");
    }

    //relationship with table months 
    public function months() {
        return $this->belongsTo(Month::class, "month_id");
    }
}
