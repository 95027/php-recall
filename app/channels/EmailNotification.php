<?php

namespace App\Channels;

use App\Contracts\NotificationInterface;
use App\Services\EmailService;
use Core\Notification;

class EmailNotification extends Notification implements NotificationInterface
{
    private EmailService $emailService;

    public function __construct()
    {
        $this->emailService = new EmailService();
    }

    public function send(string $message): void
    {
        $formatted = $this->format($message);
        $this->log("Preparing Email notification");

        $this->emailService->sendEmail($formatted);
    }
}
