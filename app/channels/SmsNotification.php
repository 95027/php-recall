<?php

namespace App\channels;

use App\Contracts\NotificationInterface;
use App\Services\SmsService;
use Core\Notification;

class SmsNotification extends Notification implements NotificationInterface
{
    private SmsService $smsService;

    public function __construct()
    {
        $this->smsService = new SmsService();
    }

    public function send(string $message): void
    {
        $formatted = $this->format($message);
        $this->log("Preparing SMS notification");

        $this->smsService->sendSms($formatted);
    }
}
