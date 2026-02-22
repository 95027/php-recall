<?php

namespace App\Traits;

trait LoggerTrait
{
    public function log(string $text)
    {
        echo "LOG " . $text . PHP_EOL;
    }
}
