<?php

// framework/index.php
require_once './vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$routes = include './src/app.php';
$sc = include './src/container.php';

$request = Request::createFromGlobals();

$response = $sc->get('framework')->handle($request);

$response->send();
