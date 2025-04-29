<?php

namespace App\Services\EmailService;
use App\Models\EmailService\EmailProvider;
use App\Services\Core\HelperService;
use Exception;
use Illuminate\Support\Facades\Http;
use SendGrid;
use SendGrid\Mail\Mail;


class SendgridService implements EmailServiceInterface
{
    public function send($to, $subject, $body)
    {
        $email = new Mail();
        $email->setFrom(config('mail.from.address'), "Support Hrbee");
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent("text/html", $body);
        $sendgrid = new SendGrid(config('services.sendgrid.api_key'));

        try {
            $response = $sendgrid->send($email);
            return $response->statusCode();
        } catch (Exception $e) {
            HelperService::captureException($e);
            return 'Caught exception: '. $e->getMessage();
        }
    }
}
