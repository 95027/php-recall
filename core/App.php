<?php

namespace Core;

class App
{
    public function run()
    {
        $request = Request::capture();

        $router = new Router();

        $router->get("/", function () {
            echo 'Home Page';
        });

        $router->get("/about", function () {
            echo 'About Page';
        });

        $router->dispatch($request);
    }
}
