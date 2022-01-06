<?php

namespace App\Http\Controllers;

use SMSFactor\Message;
use App\Models\student;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;


class SmsController extends Controller
{
    //
    public function index(Request $request) {
        echo "<h1 style='text-align: center'>this function is for sending message to student in phone sms or whatssap</h1>";
       
    }
}
