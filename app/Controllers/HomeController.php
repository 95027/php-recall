<?php

namespace App\Controllers;

use Core\Request;

class HomeController
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function home()
    {
        echo 'METHOD ' . $this->request->method();
    }

    public function about()
    {
        echo 'About Controller Page';
    }
}
