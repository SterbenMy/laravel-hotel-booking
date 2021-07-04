<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailValidationRequest;
use App\Services\ContactMailer;
use Illuminate\Contracts\Mail\Mailer;

class ContactFormController extends Controller
{

    /**
     * @var Mailer
     */
    private ContactMailer $mailer;

    public function __construct(ContactMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function index()
    {
        return view('mail.email');
    }

    public function sendMail(SendEmailValidationRequest $request)
    {
        $this->mailer->send($request->validated());
        return back()->with(['message' => 'Email successfully sent!']);
    }

}
