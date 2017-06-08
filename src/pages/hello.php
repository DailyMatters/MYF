<?php

// framework/hello.php
require_once '././web/index.php';

$input = $request->get('name', 'World');
$response->setContent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
