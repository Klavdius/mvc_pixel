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
    public static function run()
    {



    }

    public static function bin($binCoin){
        $dec = bindec($binCoin);
        return $dec;
    }

}