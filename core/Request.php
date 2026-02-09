<?php

namespace Core;

class Request
{
    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function uri()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function query(string $key = null)
    {
        if ($key) {
            return $_GET[$key] ?? null;
        }
        return $_GET;
    }

    public static function capture(): self
    {
        return new static();
    }
}
