<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageCreated;


class ContactsController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $request){
        $mailable = new ContactMessageCreated($request->name,$request->email,$request->message);
        Mail::to('batendejames55@gmail.com')->send($mailable);
        flashy()->success('Nous vous repondrons dans les plus brefs delais!!!');
        return redirect(route('root_path'));
    }
}
