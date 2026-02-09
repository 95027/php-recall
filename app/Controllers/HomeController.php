<?php

namespace App\Controllers;

use Core\Request;
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

        echo View::render('home', ['name' => 'sai']);
    }

    public function about()
    {
        echo 'About Controller Page';
    }
}
