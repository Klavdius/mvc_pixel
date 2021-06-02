<?php

define('DS', DIRECTORY_SEPARATOR);
define('BASE_DIR', dirname(__DIR__));

spl_autoload_register(function($className) {
    $filePath = BASE_DIR . DS . 'src' . DS . 'code' . DS . str_replace('\\', DS, trim($className, '\\')) . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

class Start
{
    public static function run(){
        $contant = "start all </br>";
        print($contant);
        $url = $_SERVER['REQUEST_URI'];
            $sepUrl = explode('/',$url,10);

        //print "$sepUrl[1]" . PHP_EOL;
        Route::requst($sepUrl[1]);
    }

}