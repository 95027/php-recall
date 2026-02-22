<?php

namespace App\Resolvers;

use App\Channels\EmailNotification;
use App\Channels\SmsNotification;
use App\Contracts\NotificationInterface;

class NotificationResolver
{
    public static function resolve(string $driver): NotificationInterface
    {
        return match ($driver) {
            'email' => new EmailNotification(),
            'sms'   => new SmsNotification(),
            default => throw new \Exception("Unsupported notification channel"),
        };
    }
}
