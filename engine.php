<?php

require_once 'core/router.php';
require_once 'loader/viewer.php';
$router = new Router();

$router->route('/', function () {
    return view('main.php');
});

$router->route('/home', function () {
    return view('main.php');
});

$router->route('/services', function () {
    return view('service.php');
});

$router->route('/aboutus', function () {
    return view('about.php');
});

$router->route('/contactus', function () {
    return view('contact.php');
});

$router->launch($router->action());
