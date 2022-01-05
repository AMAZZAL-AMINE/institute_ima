<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    //
    public function index($id) {
        
        // $student = student::findOrFail($id);
        // Nexmo::message()->send([
        //     'to' => $student->phone,
        //     'from' => 'IMA',
        //     'text' => 'message push',
        // ]);

        // echo "message sent";
    }
}
