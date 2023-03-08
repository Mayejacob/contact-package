<?php

namespace Jayboss\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Jayboss\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Jayboss\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function save(Request $request)
    {
        Mail::to(config('contact.recipient'))->send(new ContactMailable($request->message));
        Contact::create($request->all());
        return redirect()->back()->with('success', 'Created successfully');
    }
}
