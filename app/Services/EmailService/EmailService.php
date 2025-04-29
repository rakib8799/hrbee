<?php

namespace App\Services\EmailService;

use App\Services\EmailService\SendgridService;

class EmailService
{
    protected SendgridService $sendgridService;
    protected $providerService;
    public function __construct(SendgridService $sendgridService)
    {
        $this->providerService = $sendgridService;
    }

    public function send($to, $subject, $body)
    {
        return $this->providerService->send($to, $subject, $body);
    }
}
