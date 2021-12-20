<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;

    protected $fillable = array(
        "month_num",
    );

    //make relationship with table monthpay
    public function payedmonths() {
        return $this->hasMany(PayedMonth::class);
    }
}
