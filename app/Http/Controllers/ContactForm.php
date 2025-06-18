<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm as ContactFormModel;

class ContactForm extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'nullable',
        ]);

        $contactForm = new ContactFormModel();
        $contactForm->name = $request->input('name');
        $contactForm->email = $request->input('email');
        $contactForm->phone = $request->input('phone');
        $contactForm->subject = $request->input('subject');
        $contactForm->message = $request->input('message');
        $contactForm->save();

        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }
}
