<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //protected the data
    protected $fillable = array(
        "fname","lname",
        "image","cin",
        "phone","berthday",
        "nvschole","firstPayed","formation_id",
        "user_id",
        "cin_img","is_in_list_dattente",'created_at'
    );

    //relationship to user table model
    public function users() {
        return $this->belongsTo(User::class, "user_id");
    }

    //relation to fomations tanle model
    public function formations() {
        return $this->belongsTo(Formation::class, "formation_id");
    }

    //relationship to payedmounth table model
    public function payedmounth() {
        return $this->hasMany(PayedMonth::class);
    }

    //relation ship to what is unstitute
    public function instituts() {
        return $this->hasMany(IsImaOrIphec::class);
    }

    //relationship students payments
    public function allpayments() {
        return $this->hasMany(AllStudentPayments::class, 'student_id');
    }


    //belog to absence table
    public function apcens() {
        return $this->hasMany(Absence::class, 'student_id');
    }

    
}
