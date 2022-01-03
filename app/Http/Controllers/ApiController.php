<?php

namespace App\Http\Controllers;

use App\Models\LemploiIma;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function testing() {
        return LemploiIma::all();
    }
}
