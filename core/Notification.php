<?php

namespace Core;

use App\Traits\LoggerTrait;

abstract class Notification
{
    use LoggerTrait;

    protected function format(string $message)
    {
        return strtoupper($message);
    }
}
