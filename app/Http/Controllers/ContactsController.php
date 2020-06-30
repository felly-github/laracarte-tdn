<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactsController extends Controller
{
    //
    public function create(){
        return view('pages.contact');
    }

    public function store(ContactFormRequest $request){
  
        Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessageCreated($request->name, $request->email, $request->message));

        Message::create($request->only('name','email','message'));
        
        session()->flash('emailSent', 'Nous vous repondrons dans un plus brefs delais');

        return Redirect()->route('contact_path');
    }
}
