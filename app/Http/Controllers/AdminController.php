<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\Student;
use App\Models\Formation;
use App\Models\PayedMonth;
use App\Models\IsImaOrIphec;
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

    //accepted user to be student
    public function acceptStudnet($cin) {
        $student = Student::where("cin", $cin)->get();
        $months = Month::all();
        return view("admin.pages.acceptstudent", compact("student","months"));
    }

    //update the student prace and acctive his accounting
    public function studentActiveAccount(Request $request, $id) {
     
        $data = $request->validate(
            array(
                "prix_iscription" => "required",
                "prix_firstmonth" => "required",
                "month" => "required",
                "isiphicorima" => "required",
            )
        );
        $student = Student::find($id);
        $month = new PayedMonth;
 
        $month->create(
            array(
                "student_id" => $student->id,
                "name" => $data['month'],
                "prix" => $data["prix_firstmonth"],
            ),
        );

        $student->update(
            array(
                // "isimaoriphec" => $request->isiphicorima,
                "firstPayed" => $data['prix_iscription'],   
            )
        );

        $chosecenter = New IsImaOrIphec;
        $chosecenter->create(
            array(
                "student_id" => $student->id,
                "institute" => $data['isiphicorima'],
            )
        );

        return back()->with(
            array(
                "message" =>"Student Has Been Add To Echole"
            )
        );
    }
    //deleteinh user
    public function studentDeleting($id) {
        $student = Student::find($id);
        $student->delete();
        return back()->with(
            array(
                "message" => "Student Has been Deleted Successfuly"
            )
        );
    }

    //print invoice page
    public function studentPrintInvoice($id) {
        $invoice = PayedMonth::where("student_id", $id)->first();
        $student = Student::where("id", $id)->first();
        return view("admin.pages.printvoice", compact('invoice', 'student'));
    } 
    
    //get all student wgo get hes invoisement
    public function allStudentAccepted() {
        $students = Student::whereNotNull('firstPayed')->get();
        return view("admin.pages.allstudentacetpted", compact("students"));
    }

    //student profile functiona
    public function studentProfile($id) {
        $student = Student::findOrFail($id);
        $mounths = PayedMonth::where("student_id", $id)->get();
        $institute = IsImaOrIphec::where("student_id", $id)->first();
        return view("admin.pages.profilestudent", compact("student","mounths","institute"));
    }


    //add formatioin page
    public function addFormation() {
        return view("admin.pages.addFormation");
    }

    //store formatio in database 
    public function storeFormation(Request $request) {
        $data = $request->validate(
            array(
                "name" => "required",
                "slug" => "required",
                "desc" => "required",
            ),
        );

        $formation = new Formation;
        $formation->create(
            array(
                "name" => $data['name'],
                "slug" => $data['slug'],
                "description" => $data["desc"]
            ),
        );

        return back()->with(
            array(
                "message" => "Formation A Created Successfuly"
            )
        );
    }

    //get all formations 
    public function allFormations() {
        $formations = Formation::all();
        return view("admin.pages.allformation", compact("formations"));
    }
     

    public function allpayments() {
        $students = Student::all();
        $payments = PayedMonth::all();
        return view("admin.pages.allpayments", compact("payments","students"));
    }

    //get all studnet who have a same formation 
    public function studentdFormation($id) {
       $formation = Formation::find($id);
        return view("admin.pages.studentswithsingleformation", compact("formation"));
    }

    //page edit formation 
    public function pageEditdFormation($id) {
        $formation = Formation::find($id);
        return view("admin.pages.updateformation", compact("formation"));
    }
    //stoe update of formation in database
    public function updateFormationAndStore($id, Request $request) {
        $formation = Formation::find($id);
        $data = $request->validate(array(
            "name" => "required",
            "slug" => "required",
            "desc" => "required",
        ));

        $formation->update(
            array(
                "name" => $data['name'] ?? $formation->name,
                "slug" => $data['slug'] ?? $formation->slug,
                "description" => $data["desc"] ?? $formation->description,
            )
        );

        return back()->with(
            array(
                "message" => "Done, Formation Has Been Updated Success!",
            )
        );

    }

    //delete formation
    public function deleteFormation($id) {
        $formation = Formation::find($id);
        $formation->delete();
        return back()->with(
            array(
                "message" => "Done, Formation Has Been Deleted With Success!",
            )
        );

    }

    //inscrire user by adminpage
    public function inscrireUserByAdmin() {
        return view("admin.pages.isncrirenewstudent");
    }
    //inscrire user store data
    public function inscrireUserByAdminStore(Request $request) {
        $data = $request->validate(
            array(
                    "fname" => "required",
                    "lname" => "required",
                    "cin" => "required",
                    "phone" => "required",
                    "dberth" => ["required", "date"],
                    "nschole" => "required",
                    "formation" => "required",
            ),
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
                "center" => null,
                "formation_id" => $data["formation"],
                "user_id" => auth()->user()->id,
            )
        );

        return redirect()->route("admin.requestusers")->with(
            array(
                "message" => "Done, Stident A Created Suuccessfuly"
            )
        );
    }

    //function for searech student to pay
    public function searchStudentToPay() {
        return view("admin.pages.searchstudnttopayfac");
    }
    /**
     * ti do list for on 23/12/2021 => inshallah
     * create update formation 
     * creat update styudent info
     */
}
  