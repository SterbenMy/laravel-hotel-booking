<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;

class ContactFormController extends Controller
{

    /**
     * @var Mailer
     */
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function index()
    {
        return view('mail.email');
    }

    public function sendMailas(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'name' => 'required',
            'content'=>'required'
        ]);

        $data = [
            'subject' => $request->input('subject'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'content' => $request->input('content')
        ];

        $this->mailer->send('mail.email-template',
            $data,
            function(Message $message) use ($data) {
            $message->to($data['email'])
                    ->subject($data['subject'])
                    ->from('cristi@cristi.com',$data['name']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }

//    public function __invoke()
//    {
//                Mail::send('mail.mailTest',['mail'=>'cristi@cristi.com'], function(Message $message){
//                  $message->to('text@gmail.com');
//                  $message->subject("test mail");
//                });
//
//    }

}
