<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //requered login admin
    public function __construct() {
        return $this->middleware("auth");
    }

    //admin dahsboard 
    public function adminDashboard() {
        return view("admin.dashboard");
    }
}
