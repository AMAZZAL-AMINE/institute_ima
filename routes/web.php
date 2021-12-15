<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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