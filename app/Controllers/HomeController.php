<?php

namespace App\Controllers;

use Core\Request;
use Core\Response;
use Core\View;

class HomeController
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function home()
    {
        // echo 'METHOD ' . $this->request->method();

        // Response::send(View::render('home', ['name' => 'sai']));

        Response::json(["message" => "home"]);
    }

    public function about()
    {
        echo 'About Controller Page';
    }
}
