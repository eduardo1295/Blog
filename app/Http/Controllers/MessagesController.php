<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(){

        $message = request()->validate([
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'content' => 'required | min:3'
        ],[
            'name.required' => 'Necesito tu nombre'
        ]);

        Mail::to('lalalolo1221@gmail.com')->queue(new MessageReceived($message));

        return back()->with('status','Recibimos tu mensajes,te responderemos en mesnode 24 horas');

    }
}
