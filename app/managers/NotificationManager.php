<?php

namespace App\Managers;

use App\Resolvers\NotificationResolver;

class NotificationManager
{
    public static function channel()
    {
        $driver = config('notification.default');
        return NotificationResolver::resolve($driver);
    }
}
