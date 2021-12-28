<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class InstriptionController extends Controller
{
    //requered login or register 
    public function __construct() {
        return $this->middleware('auth');
    }

    public function studentInscription() {
        $formations = Formation::all();
        return view('auth.inscription', compact('formations'));
    }
}
