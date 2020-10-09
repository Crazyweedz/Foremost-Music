<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('name', 'asc')->get();

        return view('contact.index', compact('contacts'));
    }

    public function send(ContactRequest $request)
    {
        $data = $request->all();

        Mail::to(setting('site.email_contact'))->send(new Contact($data));

        return redirect()->route('contact.index')->with('success', 'Votre message a bien été envoyée.');
    }
}
