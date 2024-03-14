<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NotifyMail;

class SendEmailControllers extends Controller
{
 
 public function index() 
 {
    Mail::to('receiver-email-id')->send(new NotifyMail());


 }
 
 
 
}
