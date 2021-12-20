<?php

use App\Models\Month;
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
// ==========================END ROUTE ADMIN  ==============================

//creat months
Route::get("/m", function() {
    $month = new Month;
    $month->create(
        array(
            "month_num" => "12eme Mois",
        )
    );
    echo "done";
});
