<?php

namespace App\Services;

class EmailService
{
    public function sendEmail(string $message)
    {
        echo "Email API called with message: " . $message . PHP_EOL;
    }
}
