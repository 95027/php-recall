<?php

namespace Core;

class Router
{

    protected array $routes = [];

    public function get(string $uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function dispatch(array $request)
    {
        $method = $request['method'];
        $uri = $request['uri'];

        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            echo '404 not found';
            return;
        }

        $action = $this->routes[$method][$uri];

        if (is_array($action)) {
            [$class, $method] = $action;
            $controller = new $class;
            $controller->$method();
            return;
        }

        call_user_func($action);
    }
}
