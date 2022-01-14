<?php

use Carbon\Carbon;
use App\Models\Month;
use App\Models\Student;
use App\Models\Formation;
use App\Models\PayedMonth;
use App\Models\IsImaOrIphec;
use App\Models\AllStudentPayments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstriptionController;
use App\Http\Controllers\SmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

//home page
Route::get('/', [HomeController::class, 'index'])->name('home');

//about page
Route::get("/A-propos-De-Nous", [HomeController::class, 'aboutUs'])->name('about.us');
//formations page
Route::get("/List-Des-Formations/{slug}", [HomeController::class, 'listFormations'])->name('list.formations');
//contact page
Route::get("/Contact-Nous", [HomeController::class, 'contactUs'])->name('contact.us');
//blog page
Route::get("/Ima-Blog", [HomeController::class, 'blog'])->name('blog');
//inscription page
Route::get("/Student-Inscription", [InstriptionController::class, 'studentInscription'])->name("student.inscription");
//profiel student
 



// ==========================ALL THIS ROUTE HERE IS FOR ADMIN  ==============================
// admin dashboard
Route::get("/Admin/Dashboard", [AdminController::class, 'adminDashboard'])->name("admin.dashboard");
//request all users page
Route::get("/Admin/Users-Request", [AdminController::class, 'requestUserPage'])->name("admin.requestusers");
//insert data to database ahsing post
Route::post("/Admin/Users-Request-insert", [AdminController::class, 'storeDataInStudent'])->name("admin.insertdatauser");
//accepted user to be a student
Route::get("/Admin/Students/{cin}", [AdminController::class, 'acceptStudnet'])->name("admin.acceptstudent");
//get furst pay of student
Route::put("/Admin/Students/{id}", [AdminController::class, "studentActiveAccount"])->name("studnet.active");
//print user invoice
Route::get("/Admin/Student/Print/{id}", [AdminController::class, "studentPrintInvoice"])->name("admin.printinvoice");
//page where we get all student who get the  invoice
Route::get("/Admin/All-Student", [AdminController::class, "allStudentAccepted"])->name("student.whoaccepted");
//page student _details
Route::get("/Admin/Student/{id}", [AdminController::class, "studentProfile"])->name("student.profile");
//deleting student
Route::delete("/Admin/Student/Delete/{id}", [AdminController::class, "studentDeleting"])->name("student.delete");
//add formation page 
Route::get("/Admin/Add-formation", [AdminController::class, "addFormation"])->name("formation.add");
//store formation data
Route::post("/Admin/Add-Formation/Store", [AdminController::class, "storeFormation"])->name("formation.store");
//showing all formations
Route::get("/Admin/All-Formations", [AdminController::class, "allFormations"])->name("admin.allformations");
//all payments for user
Route::get("/Admin/All-Payments", [AdminController::class, "allpayments"])->name("admin.allpayments");
//get all srtudent who have a same formations 
Route::get("/Admin/Formation-Students/{slug}", [AdminController::class, "studentdFormation"])->name("student.formation");
//page update formation 
Route::get("/Admin/Formation/Edit/{id}", [AdminController::class, "pageEditdFormation"])->name("admin.pageeditforma");
//put the update of romation in daTABASE
Route::put("/Admin/Formation/Update/{id}", [AdminController::class, "updateFormationAndStore"])->name("admin.update.formation");
//delete formtion 
Route::delete("/Admin/Formation-Delete/{id}", [AdminController::class, "deleteFormation"])->name("formation.delete");
//inscrire student by admin 
Route::get("/Admin/Inscrire-Student", [AdminController::class, "inscrireUserByAdmin"])->name("admin.inscrirestudent");
//store data of user in database students
Route::post("/Admin/Inscrire-Student", [AdminController::class, "inscrireUserByAdminStore"])->name("admin.inscrire.new.student");
//page search for students to pay new month
Route::get("/Admin/Search-Student", [AdminController::class, "searchStudentToPay"])->name("admin.search.student");
//page for get result of search;
Route::get("/Admin/Search-Result", [AdminController::class, "searchStudentResult"])->name("admin.search.student.result");
//factur for add new payment month 
Route::get("/Admin/Payment-New-Month/{id}", [AdminController::class, "payMonthStdent"])->name("admin.payment.newmonth");
//insert data of payment of student to accepte the new month in databse
Route::post("/Admin/Payment-New-Month/{id}", [AdminController::class, "paymentStoreNewMonth"])->name("payment-store.data.new.month");
//go to print yhe facture
Route::get("/Admin/Fcature-Ready/{id}", [AdminController::class, "functutreReady"])->name("admin.facture.ready");
//print facture for oyher months
Route::get("/Admin/Print-Facture/{id}", [AdminController::class, "facturePrint"])->name("admin.facture.print");
//get students all months payments
Route::get("/Admin/All-Payments-Students", [AdminController::class, "allPaymentsStudents"])->name("admin.all.payments.students");
//get total of payments of single formation
Route::get("/Admin/Formation-Search", [AdminController::class, "searchFormationPaymernts"])->name("admin.search.foration.pay.total");
//page result of searching the formation using the month number
Route::get("/Admin/Formation-Search-Result", [AdminController::class, "searchFormationPaymerntsResult"])->name("formation.search.pay.result");
// Rooms lenplois
////////////////moj=ht pauments
Route::get("/Admin/Months/Payments", [AdminController::class, "monthPay"])->name("admin.moth.pay");
// ===========================================================================
Route::get("/Admin/Manager-Rooms", [AdminController::class, "managerRoomes"])->name("admin.manager.rooms");
//edit lemploi ima
Route::get("/Admin/Ima/Lemlpoi/{id}", [AdminController::class, 'editowIma'])->name("admin.edit.ima.table");
//save updated lemploi ima
Route::put("/Admin/Update/Lemlpoi/{id}", [AdminController::class, 'updateLemploiIma'])->name("admin.lemploi.save.ima");
//manager studend absence
Route::get("/Admin/Manage-Absences", [AdminController::class, 'manageAbsences'])->name("admin.manager.absences");
//iphec lemploi edit table 
Route::get("/Admin/Iphec/Lemlpoi/{id}", [AdminController::class, 'editowIphec'])->name("admin.edit.iphec.table");
//save updated lemploi ima
Route::put("/Admin/Iphec/Update/Lemlpoi/{id}", [AdminController::class, 'updateLemploiiphec'])->name("admin.lemploi.save.iphec");
Route::get("/Admin/Send-Sms", [SmsController::class, 'index']);
///////////////Deplome////////////////////////////////
Route::get("/Admin/Create-Deplom", [AdminController::class, 'deplom'])->name("admin.deplom");
Route::get("/Admin/Create-Certificate", [AdminController::class, 'createCertificate'])->name("admin.createCertificate");
//rout inser data of deplom and return to page print deplom 
Route::get("/Admin/Print-Deplom", [AdminController::class, 'createDeplom'])->name("admin.print.deplom");
Route::post("/Admin/Deplom", [AdminController::class, 'createDeplom'])->name("admin.print.deplom.data");

//============================================================================
//update student Info 
Route::put("/Admin/Student/{id}/Edit", [AdminController::class, 'updateStudent'])->name("admin.update.student");

//invoice testing to ge listElement
Route::get("/Admin/invoice", function() {
    return view("admin.newfac");
});
// ==========================END ROUTE ADMIN  ==============================

// creat months
Route::get("/m", function() {
    $month = new Month;
    $month->create(
        array(
            "month_num" => "Premier Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "2eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "3eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "4eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "5eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "6eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "7eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "8eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "9eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "10eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "11eme Mois",
        )
    );
    $month->create(
        array(
            "month_num" => "12eme Mois",
        )
    );
    echo "done";
});

//testing user payment methhod
Route::get("/h/{id}", function($id) {
    // $month = PayedMonth::where("student_id", $id)->get();
    // $student = Student::where("id", $id)->get();
    // foreach ($student as $stude) {
    //     echo $stude->fname."<br>";
    // }
    // if( $student->count() === 0 ) {
    //     echo "<h1>Not Found</h1>";
    // }
    // foreach($month as $stud) {
        
    //     echo $stud->name."<br>";

    // }
    $month = PayedMonth::where("student_id", $id)->get();
    foreach($month as $stud) {
        echo $stud->students->fname;
        
    }

});

//formation studnets
Route::get("/f/{id}", function($id) {
    $formation = Formation::find($id);
    foreach ($formation->students as $std) {
       echo $std->fname."<br>";
    }
});

//find student institute
Route::get("/s/{id}", function($id) {
    $student = IsImaOrIphec::find($id);
    // $inst = IsImaOrIphec::where("student_id", $id)->first();
    echo $student->students->fname;
});

//test date pay
// Route::get("/he", function() {
//     $payedmonths = AllStudentPayments::all();
//     foreach ($payedmonths as $pay) {

//             echo $pay->students->id." There Is A uder Chold Pasy <br>";
//         }
//     }
// });