<?php

define('DS', DIRECTORY_SEPARATOR);
define('BASE_DIR', dirname(__DIR__));
define('br', "</br>");


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

        $url = $_SERVER['REQUEST_URI'] ;
        echo $url."</br>";
       echo $contant;
//        $url = $_SERVER['REQUEST_URI'];
            $sepUrl = explode('/',$url,10);
            echo "$sepUrl[1]"."</br>";
        //print "$sepUrl[1]" . PHP_EOL;
       $triger = Route::requst($sepUrl[1]);
       if($triger == false){echo Ошибка;}

    }

}