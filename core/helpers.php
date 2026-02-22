<?php

function env(string $key, $default = null)
{

    return $_ENV[$key] ?? $_SERVER[$key] ?? $default;
}

function base_path(string $path = "")
{
    return dirname(__DIR__) . ($path ? DIRECTORY_SEPARATOR . $path : '');
}

function config(string $key, $default = null)
{

    $segments = explode('.', $key);
    $config = $GLOBALS['config'] ?? [];

    foreach ($segments as $segment) {
        if (!isset($config[$segment])) {
            return $default;
        }
        $config = $config[$segment];
    }

    return $config;
}
