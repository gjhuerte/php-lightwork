<?php

// Require first the file needed for autoloading 
// created by composer which is located in the vendor
// folder. This will autoload the class inside the 
// specified folder
require_once __DIR__ . '/../vendor/autoload.php';

// Boostrap the required files on page load. The required files comes from
// the application class which will load the required setup for the system
// You may alter the application to best suite your needs.
App\Config\Bootstrap::load([
    App\Middlewares\Bootstrapper::class,
    App\Config\Route::class,
    App\Config\Base::class,
]);
