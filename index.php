<?php
use Route\Route;


error_reporting( E_ERROR);
ini_set("display_errors", 1);

require_once __DIR__ . '/vendor/autoload.php';

$route = new Route;
$route->start();



?>









