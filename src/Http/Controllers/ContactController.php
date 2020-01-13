<?php

namespace EdeskMd\Panel\Http\Controllers;

use App\Http\Controllers\Controller;
use EdeskMd\Panel\Mail\ContactMailable;

use EdeskMd\Panel\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('panel::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('panel.send_email_to'))->send(new ContactMailable($request->message, $request->name, $request->email));
        Contact::create($request->all());

        return redirect(route('contact'));
    }
}
