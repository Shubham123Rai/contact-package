<?php

namespace bitfume\contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use bitfume\contact\Models\Contact;
use bitfume\contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {

        Contact::create($request->all());
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));

        return redirect(route('contact'));
    }
}
