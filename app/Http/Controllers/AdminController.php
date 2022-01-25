<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Month;
use App\Models\Deplom;
use App\Models\Absence;
use App\Models\Student;
use App\Models\Formation;
use App\Models\LemploiIma;
use App\Models\PayedMonth;
use App\Models\IsImaOrIphec;
use App\Models\LemploiIphec;
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
        $invitations =  Student::where('firstPayed', null)->get();
        $students = Student::whereNotNull('firstPayed')->get();
        $formations = Formation::all();
        
        return view("admin.dashboard", 
                compact('invitations','students','formations')
        );
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
                "cin_img" => ["required","image"],
            )
        );
        if ($request->hasFile("img")) {
            $filePath  = request('img')->store('studentimgs', 'public');
        }
        if ($request->hasFile("cin_img")) {
            $filePathTwo  = request('cin_img')->store('studentimgs', 'public');
        }

        auth()->user()->students()->create(
            array(
                "fname" => $data["fname"],
                "lname" => $data["lname"],
                "image" => $filePath,
                "cin_img" => $filePathTwo,
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

    //student profile
    public function studentProfile($id) {
        $student = Student::findOrFail($id);
        $mounths = PayedMonth::where("student_id", $id)->get();
        $institute = IsImaOrIphec::where("student_id", $id)->first();
        $absences = Absence::where("student_id", $student->id)->orderBy('month', 'asc')->get(); 
        $formations = Formation::all();
        return  view("admin.pages.profilestudent", compact("student","mounths","institute","absences","formations"));
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


        $month->create(
            array(
                "student_id" => $student->id,
                "students_name" => $student->fname." ".$student->lname,
                "student_cin" => $student->cin,
                "name" => "Prix Dinscription",
                "prix" => $data['prix_iscription'],
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

 
    //add formatioin page
    public function addFormation() {
        return view("admin.pages.addformation");
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
                    "cin_img" => ["required","image"],
            ),
        );

        if ($request->hasFile("img")) {
            $filePath  = request('img')->store('studentimgs', 'public');
        }
        if ($request->hasFile("cin_img")) {
            $filePathTwo  = request('cin_img')->store('studentimgs', 'public');
        }

        auth()->user()->students()->create(
            array(
                "fname" => $data["fname"],
                "lname" => $data["lname"],
                "image" => $filePath,
                "cin_img" => $filePathTwo,
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
        $allpayment = AllStudentPayments::where("student_id",$student->id)->get();
        $allmonth = Month::all();
        $months = PayedMonth::where("student_id", $id)->get();
        $institute = IsImaOrIphec::where("student_id", $id)->first();
        return view("admin.pages.newpayfacturmonth", compact('student','months','institute','allmonth',"allpayment"));
        
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
        $year = $request->year;

        if ($formation == "allformation") {
            $payedmonths =  PayedMonth::whereMonth('created_at','=', $month)
                                ->whereYear('created_at','=', $year)->get();

            $newstudents =  PayedMonth::whereMonth('created_at','=', $month)
                                ->whereYear('created_at','=', $year)
                                ->where('name','=', "Prix Dinscription")
                                ->orWhereMonth('created_at','=', $month)
                                ->whereYear('created_at','=', $year)
                                ->where('name','=', "Premier Mois")->get();
                                

        }
        
        else {
            $payedmonths =  PayedMonth::where('formation', $formation)
                        ->whereMonth('created_at','=', $month)
                        ->whereYear('created_at','=', $year)->get();
            $newstudents =  PayedMonth::where('formation', $formation)
                        ->whereMonth('created_at','=', $month)
                        ->whereYear('created_at','=', $year)
                        ->where('name','=', "Prix Dinscription")
                        ->orWhere('formation', $formation)
                        ->whereMonth('created_at','=', $month)
                        ->whereYear('created_at','=', $year)
                        ->where('name','=', "Premier Mois")->get();
                        
                        
        }
        
        return view("admin.pages.resultsearchtotalformation", compact('payedmonths','year','month','formation','newstudents'));
    }


    // =================================================================================================\
    // manager rooms
    public function managerRoomes() {
        $imas = LemploiIma::all();
        $iphecs = LemploiIphec::all();
        return view("admin.lemplois.rooms", compact('imas','iphecs'));
    }
   
    //edit ima table lemploi
    public function editowIma($id) {
        $ima = LemploiIma::where("id", $id)->first(); 
        return  view("admin.lemplois.editima", compact("ima"));
    }
   
   
    //update table lemploi ima 
    public function updateLemploiIma($id, Request $request) {
        $ima = LemploiIma::where("id", $id);
        $ima->update(
            array(
                "room_1" => $request->room_1,
                "room_2" => $request->room_2,
                "room_3" => $request->room_3,
                "room_4" => $request->room_4,
            )
        );

        return redirect()->route("admin.manager.rooms")->with(
            array(
                "message" => "Tableau mis à jour avec succès",
            )
        );

    }

    //edite table iphec lemploi
    public function editowIphec($id) {
        $iphec = LemploiIphec::where("id", $id)->first(); 
        return  view("admin.lemplois.editiphrec", compact("iphec"));
    }

    //save edite table lemploi iphec 
    public function updateLemploiiphec($id, Request $request) {
        $iphec = LemploiIphec::where("id", $id);
        $iphec->update(
            array(
                "room_1" => $request->room_1,
                "room_2" => $request->room_2,
                "room_3" => $request->room_3,
                "room_4" => $request->room_4,
                "room_5" => $request->room_5,
                "room_6" => $request->room_6,
                "room_7" => $request->room_7,
                "room_8" => $request->room_8,
                "room_9" => $request->room_9,
            )
        );

        return redirect()->route("admin.manager.rooms")->with(
            array(
                "message1" => "Tableau mis à jour avec succès",
            )
        );
    }

    //get the only payments whoe will pay the months 
    public function monthPay() {
        $payedmonths = AllStudentPayments::all();
        return view("admin.payments.month", compact('payedmonths'));
    }

    //function deplome
    public function deplom() {
        return view("admin.deplom.deplom");
    }

    //create cirtificate function
    public function createCertificate() {
        return view("admin.deplom.certificate");
    }

    //update student information
    public function updateStudent($id, Request $request) {
        $student = Student::findOrFail($id);
        $data = $request->validate(
            array(
                "f_name" => "required",
                "l_name" => "required",
                "phone" => "required",
                "cin" => "required",
                "berthday" => "required|date",
                "formation" => "required",
                "profile" => "image",
                "cin_img" => "image",
                "d_inscrire" => "required"
            )
        );

        if($request->hasFile('profile')) {
            $imagePathProfile = request('profile')->store('studentimgs', 'public');
        }
        if($request->hasFile('cin_img')) {
            $imagePathCin = request('cin_img')->store('studentimgs', 'public');
        }

        $student->update(
            [
                "fname" => $data['f_name'],
                "lname" => $data['l_name'],
                "image" => $imagePathProfile ?? $student->image,
                "cin_img" => $imagePathCin ?? $student->cin_img,
                "cin" => $data['cin'],
                "phone" => $data['phone'],
                "berthday" => $data['berthday'],
                "formation_id" => $data['formation'],
                "created_at" =>  $data['d_inscrire'],
            ]
        );

        return back()->with(
            [
                "message" => "Success, Les Information De Cet étudiant A Ete Updated Avec Success"
            ]
        );
    }


    //manager abcenses
    public function manageAbsences() {
        $students = Student::whereNotNull('firstPayed')->latest('id')->get();
        return view('admin.lemplois.absences', compact('students'));
    }


    //create absences 
    public function createAbsence($id) {
        $student = Student::findOrFail($id);    
        return view("admin.lemplois.creat_absence",
                compact("student")
        );   
    }




    // store apcense of student in daatabase
    public function stroAbsence($id, Request $request) {
        $student = Student::findOrFail($id);
        
        $data = $request->validate(
            [
                "month" => "required",
                "seance" => "required",
                "absence" => "required",
                "date" => "required",
            ]
        );

        $absent = new Absence;

        if($data["absence"] == "Absent") {

            $absent->create(
                [
                    "student_id" => $student->id,
                    "month" => $data['month'],
                    "seance" => $data['seance'],
                    "apsence" => "yes",
                    "precent" => null,
                    "date" => $data['date'],
                ]    
            );

        } else {

            $absent->create(
                [
                    "student_id" => $student->id,
                    "month" => $data['month'],
                    "seance" => $data['seance'],
                    "apsence" => null,
                    "precent" => "yes",
                    "date" => $data['date'],
                ]    
            );
        }

        return redirect()->route("admin.student.absence",$student->id)->with(
            [
                "message" => "Suucess",
            ]
        );
    }


    //get student id and get student data of apsent where id = this.id
    public function studentProfileApsence($id) {
        $student = Student::findOrFail($id);
        $absences = Absence::where("student_id", $student->id)->orderBy('month', 'asc')->get(); 
        return view("admin.lemplois.profile_apsence", compact('absences','student'));
    }


    //insert the data of deplom to database and return with data to print deplom page
    public function  createDeplom(Request $request) {

        //data request from inputs
        $name_fr = $request->name_fr;
        $name_ar = $request->name_ar;
        $berth = $request->deplom_berth;
        $cin = $request->deplom_cin;
        $formation_fr = $request->formation_fr;
        $formation_ar = $request->formation_ar;
        $promotion = $request->promotion;
        $moi_fr = $request->moi_fr;
        $moi_ar = $request->moi_ar;
        $etablis_fr = $request->etabliesmant_fr;
        $etablis_ar = $request->etabliesmant_ar;
        $fit_at = $request->fiat_a;

        $deplom = new Deplom;

        $deplom->create(
            [
                "name_fr" => $name_fr,
                "namr_ar" => $name_ar,
                "berth" => $berth,
                "cin" => $cin,
                "formation_fr" => $formation_fr,
                "formation_ar" => $formation_ar,
                "promotion" => $promotion,
                "moi_fr" => $moi_fr,
                "moi_ar" => $moi_ar,
                "etabl_fr" => $etablis_fr,
                "etabl_ar" => $etablis_ar,
                "fit_a" => $fit_at,
            ]
        );
        return view('admin.deplom.print', compact(
            'name_fr','name_ar','berth','cin','formation_fr','formation_ar','promotion','moi_fr','moi_ar','etablis_fr','etablis_ar',
            'fit_at',
        ));

    }



    //search by the day from table pyment  month
    public function searchWithDateInPayments(Request $request) {
         $day = $request->day;
         $month = $request->month;
         $year = $request->year;

         $payments =  PayedMonth::whereMonth('created_at','=', $month)
                    ->whereDay('created_at','=', $day)
                    ->whereYear('created_at','=', $year)->get();

        return view("admin.pages.allpayments", compact('payments',"day","month","year"))->with(
                        [
                            "thealert" => "active"
                        ]
                    );
            
    }
    




    public function pageToEditApcens($id) {
        $abcent = Absence::findOrFail($id);
        return view("admin.lemplois.edit_labsence", compact("abcent"));
    }


    //update the apsence of student 
    public function updateStudentAbsence(Request $request,$id) {
        $data = $request->validate(
            [
                "month" => "required",
                "seance" => "required",
                "absence" => "required",
                "date" => "required",
            ]
        );


        $absences = Absence::findOrFail($id);
        if ($data["absence"] == "Absent") {
            $absences->update(
                [
                    "month" => $data['month'],
                    "seance" => $data['seance'],
                    "apsence" => "yes",
                    "precent" => null,
                    "date" => $data['date'],
                ]
            );
        } else {
            $absences->update(
                [
                    "month" => $data['month'],
                    "seance" => $data['seance'],
                    "apsence" => null,
                    "precent" => "yes",
                    "date" => $data['date'],
                ]
            );
        }

        return redirect()->route("admin.student.absence", $absences->student_id)->with(
            [
                "message" => "Les informations ont été mises à jour avec succès"
            ]
        );
    
    }

    
}
  