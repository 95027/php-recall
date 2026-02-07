<?php

namespace Core;

class App
{
    public function run()
    {
        $request = Request::capture();
        echo '<pre>';
        print_r($request);
        echo '</pre>';
    }
}
