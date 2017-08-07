<?php


use Controllers\Home;
use Route\Route;
include 'Ajax.php';


error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once __DIR__ . '/vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
if (strnatcasecmp($uri, '/') == 0) {
    $run = new Home;
    $run->index();
}




?>









