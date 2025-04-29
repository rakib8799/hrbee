<?php

namespace App\Http\Controllers;
use App\Http\Requests\SendEmailRequest;
use App\Services\EmailService\EmailService;

class ContactController extends Controller
{
    protected EmailService $emailService;
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function index()
    {
        $pageTitle = 'Contact';
        $data = [
            'pageTitle' => $pageTitle
        ];
        return view('contact.contact', $data);    
    }

    public function sendMail(SendEmailRequest $request)
    {
        $validatedData = $request->validated();
        $title = $validatedData['subject']." from contact-us";
        $message = $validatedData['message'];
        $name = $validatedData['name'];
        $email = $validatedData['email'];

        $emailContent = "<p>{$message}</p>";
        $emailContent .= "<p><strong>From:</strong> {$name} ({$email})</p>";
        $mailTo = config('mail.to.address');
        $this->emailService->send($mailTo, $title, $emailContent);
        $responseData = [
            'status' => 'success',
            'message' => 'We have received your message. We will get beack to you soon'
        ];
        return redirect()->back()->with($responseData);
    }
}
