<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstriptionController extends Controller
{
    //requered login or register 
    public function __construct() {
        return $this->middleware('auth');
    }

    public function studentInscription() {
        return view('auth.inscription');
    }
}
