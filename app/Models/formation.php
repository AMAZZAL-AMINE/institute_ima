<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = array(
        "name", "slug", "description","pdf"
    );

    //relation ship to student table model
    public function students() {
        return $this->hasMany(Student::class);
    }

    //relationship to studnet in list dattente
    public function listDattente() {
        return $this->hasMany(ListDattente::class);
    }
}
