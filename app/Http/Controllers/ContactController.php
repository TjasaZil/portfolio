<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactedMessage;


class ContactController extends Controller
{
   public function contact(Request $request){
        Mail::to(config("mail.to.address"), config("mail.to.name"))
        ->send(new ContactedMessage($request->name, $request->email, $request->subject, $request->message));

        return redirect("/");
   }
}
