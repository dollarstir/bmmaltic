<?php

require_once 'core/router.php';
require_once 'loader/viewer.php';
$router = new Router();

$router->route('bmm/', function () {
    return view('main.php');
});

$router->route('bmm/home', function () {
    return view('main.php');
});

$router->route('bmm/services', function () {
    return view('service.php');
});

$router->route('bmm/aboutus', function () {
    return view('about.php');
});

$router->route('bmm/contactus', function () {
    return view('contact.php');
});

$router->launch($router->action());
