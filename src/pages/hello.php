<?php

// framework/hello.php
require_once '././web/index.php';

//$name = $request->get('name', 'World')
?>

Hello <?php echo htmlspecialchars(isset($name) ? $name : 'World', ENT_QUOTES, 'UTF-8') ?>

