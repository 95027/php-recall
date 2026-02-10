<?php

namespace Core;

class Response
{
    public static function send(string $content, int $status = 200)
    {

        http_response_code($status);
        echo $content;
        exit;
    }

    public static function redirect(string $url)
    {
        header("Location: {$url}");
    }

    public static function json(array $data, int $status = 200)
    {
        header("Content-Type: application/json");
        http_response_code($status);
        echo (json_encode($data));
        exit;
    }
}
