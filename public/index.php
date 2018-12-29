<?php

// Boostrap the required files on page load. The required files comes from
// the application class which will load the required setup for the system
// You may alter the application to best suite your needs.

require_once '../vendor/autoload.php';

App\Config\Application::start();
