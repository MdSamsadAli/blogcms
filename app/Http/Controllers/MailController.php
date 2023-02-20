<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;

use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    //
    public function sendEmail()
    {
        $email = "samsadalam272@gmail.com";

        $mailData = [
            'title' => 'Demo Email',
            'url' => 'http://www.shamskhus.com',
        ];

        Mail::to($email)->send(new MyTestMail($mailData));
        return response()->json([
            'message' => 'Email Has been sent.',
        ], Response::HTTP_OK);
    }
}
