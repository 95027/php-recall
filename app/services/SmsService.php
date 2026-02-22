<?php

namespace App\Services;

class SmsService
{
    public function sendSms(string $message)
    {
        echo "Sms API called with message: " . $message . PHP_EOL;
    }
}
