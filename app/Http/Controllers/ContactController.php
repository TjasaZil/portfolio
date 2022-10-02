<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactedMessage;


class ContactController extends Controller
{
   public function contact(Request $request){

      $request->validate([
         "name"=>["required","max:50"],
         "email"=>["required", "email:filter", "max:255"],
         "subject"=>["required", "min:5", "max:100"],
         "message"=>["required", "min:10"],
      ]);

        Mail::to(config("mail.to.address"), config("mail.to.name"))
        ->send(new ContactedMessage($request->name, $request->email, $request->subject, $request->message));

        return redirect("/contact")
        ->with("contacted", true);
   }
}
