<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //requered login admin
    public function __construct()
    {
        return $this->middleware("auth");
    }

    //admin dahsboard
    public function adminDashboard()
    {
        return view("admin.dashboard");
    }

    //return to page get all request user
    public function requestUserPage()
    {
        //return to page all invitation users in admin panl
        $students =  Student::where('firstPayed', null)->get();
        return view("admin.requestusers", compact('students'));
    }
    //store data users in database table students ==> request
    public function storeDataInStudent(Request $request)
    {
        //insert data to database table students
        $data = $request->validate(
            array(
                "fname" => "required",
                "lname" => "required",
                "img" => ["required","image"],
                "cin" => "required",
                "phone" => "required",
                "dberth" => ["required", "date"],
                "nschole" => "required",
                "formation" => "required",
            )
        );
        if ($request->hasFile("img")) {
            $filePath  = request('img')->store('studentimgs', 'public');
        }

        auth()->user()->students()->create(
            array(
                "fname" => $data["fname"],
                "lname" => $data["lname"],
                "image" => $filePath,
                "cin" => $data["cin"],
                "phone" => $data["phone"],
                "berthday" => $data["dberth"],
                "nvschole" => $data["nschole"],
                "firstPayed" => null,
                "formation_id" => $data["formation"],
                "user_id" => auth()->user()->id,
            )
        );

        return back()->with(
            array(
                "message" => "Done, Your data Has Been Send To Echole, We Will Call Your Soon, Be Ready"
            )
        );
    }
}
  
 
