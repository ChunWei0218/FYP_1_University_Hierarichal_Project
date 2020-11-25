<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    

    function sendEmail(Request $request)
    {

        $data = array(
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'subject'   =>  $request->subject,
            'message'   =>  $request->message
        );

     Mail::to("illogicalones1234@gmail.com")->send(new SendMail($data));
     return "Email sent";

    }
}

?>