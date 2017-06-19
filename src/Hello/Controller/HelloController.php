<?php

namespace Hello\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function indexAction(Request $request, $name)
    {
        if (is_null($name)) {
            return new Response('Hello unnamed person!');
        }
        return new Response('Hello ' . $name . '!');
    }
}
