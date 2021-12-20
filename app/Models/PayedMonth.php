<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayedMonth extends Model
{
    use HasFactory;

    protected $guarded = array(
        "user_id","prix"
    );

    //rltionship to table users  model
    public function users() {
        return $this->belongsTo(User::class, "user_id");
    }

    //relationship with table months 
    public function months() {
        return $this->belongsTo(Month::class, "month_id");
    }
}
