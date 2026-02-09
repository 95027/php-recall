<?php

namespace Core;

use Core\Container;
use Core\Request;

class Router
{
    protected array $routes = [];

    public function get(string $uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function dispatch(Request $request)
    {
        $routeMethod = $request->method();
        $routeUri    = $request->uri();

        if (!isset($this->routes[$routeMethod][$routeUri])) {
            http_response_code(404);
            echo '404 not found';
            return;
        }

        $action = $this->routes[$routeMethod][$routeUri];

        if (is_array($action)) {
            [$class, $actionMethod] = $action;

            $container  = new Container();
            $controller = $container->resolve($class);

            $controller->$actionMethod();
            return;
        }

        call_user_func($action);
    }
}
