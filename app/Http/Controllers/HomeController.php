<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //about us
    public function aboutUs() {
        return view('pages.about');
    }

    //list des formations
    public function listFormations() {
        $formations = Formation::all();
        return view('pages.formations', compact("formations"));
    }

    //contact us 
    public function contactUs() {
        return view("pages.contact");
    }

    //blog page 
    public function blog() {
        return view("pages.blog");
    }
}
