<?php

namespace App\Http\Controllers;

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
        return view('pages.formations');
    }

    //contact us 
    public function contactUs() {
        return view("pages.contact");
    }
}
