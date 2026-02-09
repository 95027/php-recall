<?php

namespace Core;

use App\Controllers\HomeController;

class App
{
    public function run()
    {
        $request = Request::capture();

        $router = new Router();

        require __DIR__ . '/../routes/web.php';

        $router->dispatch($request);
    }
}
