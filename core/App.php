<?php

namespace Core;

use App\Controllers\HomeController;

class App
{
    public function run()
    {
        $request = Request::capture();

        $router = new Router();

        $router->get("/", [HomeController::class, 'home']);

        $router->get("/about", [HomeController::class, 'about']);

        $router->dispatch($request);
    }
}
