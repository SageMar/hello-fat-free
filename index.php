<?php
// 328/hello-fat-free/index.php
// this is my CONTROLLER

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once ('vendor/autoload.php');

// instantiate the F3 framework Base class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function() {
    // echo '<h1>Hello Fat-Free!</h1>';
    // Render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run fat-free
$f3->run();