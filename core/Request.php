<?php

namespace Core;

class Request
{
    public static function capture()
    {
        return [
            'method' => $_SERVER['REQUEST_METHOD'],
            'uri' => parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            'query' => $_GET,
            'body' => $_POST,
        ];
    }
}
