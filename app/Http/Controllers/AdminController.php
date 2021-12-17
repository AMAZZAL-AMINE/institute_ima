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

    //return to page get all request user
    public function requestUserPage() {
        return view("admin.requestusers");
    }
    //store data users in database table students ==> request
    public function storeDataInStudent(Request $request) {
        //insert data to database table students
        $data = $request->validate(
            array(
                "fname" => "required",
                "lname" => "required",
                "img" => ["required","image"],
                "cin" => "required",
                "phone" => "required",
                "dberth" => ["required", "date"],

            )
        );

    }
}
