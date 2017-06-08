<?php

// framework/hello.php
require_once '././web/index.php';
?>

Hello <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
