<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\Student;
use App\Models\Formation;
use App\Models\PayedMonth;
use App\Models\IsImaOrIphec;
use Illuminate\Http\Request;
use App\Models\AllStudentPayments;

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
    public function acceptStudnet($id) {
        $student = Student::find($id);
        $months = Month::all();
        return view("admin.pages.acceptstudent", compact("student","months"));
    }

    //update the student price and acctive his accounting
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
        $studentAllPay = new AllStudentPayments;
        $studentAllPay->create(
            array(
                "student_id" => $student->id,
                "cin" => $student->cin,
                "name" => $student->fname." ".$student->lname,
                "PrixDinscription" => "yes",
                "fisrtMois" => "yes",
            )
        );
 
        $month->create(
            array(
                "student_id" => $student->id,
                "students_name" => $student->fname." ".$student->lname,
                "student_cin" => $student->cin,
                "name" => $data['month'],
                "prix" => $data["prix_firstmonth"],
                "formation" => $student->formations->name,
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
        $formations = Formation::all();
        return view("admin.pages.isncrirenewstudent", compact('formations'));
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

    //return to admin search result of student
    public function searchStudentResult(Request $request) {
        $search = $request->input("search");
        $students = Student::query()
                    ->where("cin", "LIKE", "%{$search}%")
                    ->orWhere('phone', 'LIKE', "%{$search}%")
                    ->get();
        return view("admin.pages.searchStudentResult", compact('students',"search"));
    }

    //function for pay new month
    public function payMonthStdent($id) {
        $student = Student::findOrFail($id);
        $allmonth = Month::all();
        $months = PayedMonth::where("student_id", $id)->get();
        $institute = IsImaOrIphec::where("student_id", $id)->first();
        return view("admin.pages.newpayfacturmonth", compact('student','months','institute','allmonth'));
        
    }

    //insert all data of payment of user to database
    public function paymentStoreNewMonth($id, Request $request) {
        $data = $request->validate(
            array(
                "month_name" => "required",
                "prix" => "required",
            ),
        );
        $student = Student::findOrFail($id);
        $month = new PayedMonth;
        $month->create(
            array(
                "student_id" => $student->id,
                "students_name" => $student->fname." ".$student->lname,
                "student_cin" => $student->cin,
                "name" => $data['month_name'],
                "prix" => $data['prix'],
                "formation" => $student->formations->name,
            )
        );

        $studentAllPay = AllStudentPayments::where("student_id", $student->id);
        if($data["month_name"] == "2eme Mois") {
            $studentAllPay->update(
                array(
                    "twoemeMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "3eme Mois") {
            $studentAllPay->update(
                array(
                    "treeMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "4eme Mois") {
            $studentAllPay->update(
                array(
                    "phorMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "5eme Mois") {
            $studentAllPay->update(
                array(
                    "fiveMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "6eme Mois") {
            $studentAllPay->update(
                array(
                    "sixMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "7eme Mois") {
            $studentAllPay->update(
                array(
                    "sivenMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "8eme Mois") {
            $studentAllPay->update(
                array(
                    "eightMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "9eme Mois") {
            $studentAllPay->update(
                array(
                    "nineMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "10eme Mois") {
            $studentAllPay->update(
                array(
                    "teenMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "11eme Mois") {
            $studentAllPay->update(
                array(
                    "elevMois" => "yes",
                )
            );
        }
        if($data["month_name"] == "12eme Mois") {
            $studentAllPay->update(
                array(
                    "twilvMois" => "yes",
                )
            );
        }
        return redirect()->route('admin.facture.ready',$student->id)->with(
            array(
                "message" => "Done"
            )
        );

    }

    //if facture ready to print when click the button
    public function functutreReady($id) {
        $student = Student::findOrFail($id);
        return view("admin.pages.getisecendinvoice", compact("student"));
    } 
    //print facture 
    public function facturePrint($id) {
        $student = Student::findOrFail($id);
        $month = PayedMonth::where("student_id", $id)->orderBy('id', 'DESC')->first();

        $institute = IsImaOrIphec::where("student_id", $id)->first();
        return view("admin.pages.printfacturesecent", compact("student", "month", "institute"));
    }

    //get all payments of students in one table
    public function allPaymentsStudents() {
        $payments = AllStudentPayments::all();
        return view("admin.pages.studentspayments", compact("payments"));
    }

    //search for formation to get the total price using the months
    public function searchFormationPaymernts() {
        $formations = Formation::all();
        return view("admin.pages.searchpayments", compact("formations"));
    }

    //find the result of searchi,g the formation and the month using the months number
    public function searchFormationPaymerntsResult(Request $request) {
        $formation = $request->formation;
        $month = $request->month;
        dd($month);
    }

    /**
     * ti do list for on 23/12/2021 => inshallah
     * create update formation 
     * creat update styudent info
     */
}
  