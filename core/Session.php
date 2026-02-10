<?php

namespace Core;

class Session
{
    public static function set(string $key, $val)
    {
        $_SESSION[$key] = $val;
    }

    public static function get(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public static function forget(string $key)
    {
        unset($_SESSION[$key]);
    }

    public static function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    public static function destroy()
    {
        session_destroy();
    }
}
