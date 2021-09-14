<?php
//require_once 'Core/Model.php';
//require_once 'Core/View.php';
//require_once 'Core/Controller.php';
//require_once 'Core/Route.php';
spl_autoload_register(function($className)
{
   include 'Core/'. $className . '.php';
});

Route::start();

