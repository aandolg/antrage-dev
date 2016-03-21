<?php
session_start();
$config = parse_ini_file(__DIR__.'/config.ini');
var_dump($config);

?>