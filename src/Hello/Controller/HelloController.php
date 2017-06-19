<?php

namespace Hello\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function indexAction($name)
    {
        if (is_null($name)) {
            return new Response('Hello unnamed person!');
        }
        return new Response('Hello ' . $name . '!');
    }
}
