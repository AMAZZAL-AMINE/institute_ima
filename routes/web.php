<?php

use App\Models\Month;
use App\Models\Student;
use App\Models\Formation;
use App\Models\PayedMonth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstriptionController;

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
Route::get("/List-Des-Formations", [HomeController::class, 'listFormations'])->name('list.formations');
//contact page
Route::get("/Contact-Nous", [HomeController::class, 'contactUs'])->name('contact.us');
//blog page
Route::get("/Ima-Blog", [HomeController::class, 'blog'])->name('blog');
//inscription page
Route::get("/Student-Inscription", [InstriptionController::class, 'studentInscription'])->name("student.inscription");




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
// ==========================END ROUTE ADMIN  ==============================

// creat months
Route::get("/m", function() {
    $month = new Month;
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