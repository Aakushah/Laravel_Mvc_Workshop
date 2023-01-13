<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view("contact");
    }

    public function process(Request $request) {

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required|digits:10",
            "subject" => "required",
            "message" => "required|min:30",
        ]);

        $sc = new Contact();
        $sc->name = $request->name;
        $sc->phone = $request->phone;
        $sc->email = $request->email;
        $sc->subject =$request->subject ;
        $sc->message = $request->message;

        $sc->save();

        echo "0k!!";


        

    }
}
