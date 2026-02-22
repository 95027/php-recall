<?php

namespace App\Services;

use App\Contracts\NotificationInterface;

class NotificationService
{

    private NotificationInterface $channel;

    public function __construct(NotificationInterface $channel)
    {
        $this->channel = $channel;
    }

    public function notify(string $message)
    {
        $this->channel->send($message);
    }
}
