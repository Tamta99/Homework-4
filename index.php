<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

include_once 'Request.php';
include_once 'Response.php';
include_once 'Route.php';

$router = new Router(new Request);
$router->get('/hey', 'main');
?>