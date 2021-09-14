<?php

namespace Core;
require_once 'src/code/Core/Url.php';
define('DS', DIRECTORY_SEPARATOR);
define('BASE_DIR', dirname(__DIR__));
define('br', "</br>");

spl_autoload_register(function($className) {
    // $filePath = BASE_DIR . DS . 'src' . DS . 'code' . DS . str_replace('\\', DS, trim($className, '\\')) . '.php';
    $filePath = BASE_DIR . DS . 'code' . DS.  str_replace('\\', DS, trim($className, '\\')) . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});
spl_autoload_register(function ($pathFile)
{
 $filePath = BASE_DIR . DS . 'code' . DS . str_replace('\\', DS, trim($pathFile,'\\')).'php';
});

class Route
{
    //путеводный листок
//    1 разобрать url
//    2 последнее слово указывает на контент.
//    контент будет phtml страницей. её нужно будет подключать и выводить в echo шаблона $content
//    3 выбрать вид, по условиям url. через контроллер
//    если main то первый
//    если другая первая папка второй вид view
//    в виде должна быть разметка и $content.
//    4 контроллер собирает все эти переменные и выдает через echo результат.
//    5 контроллеры должны быть разными. переход по шагам идет в роутере. в нем цепочкой вытягиваются функции контроллеров.
// контроллер обрабатывает get and post
// затем передает данные от туда в функции модели как аргументы. модель не касается get and post never
// model build result and send in Controller -> send in View result programm
    private $urlArr = [];

     public static function  start()
     {
        $myUrl = self::decoderUrl();
//        $urlArr = self::splittUrl($myUrl); //весь url разобран в массив. теперь нужно присвоить контроллер и передать контент
//        if(!(empty($urlArr[0])))
//        {
//            //вариант по умолчанию main
//            $patch = BASE_DIR . DS . "App\View\\" .str_replace('\\', DS, trim($urlArr[0], '\\'))  . ".phtml";
//            if (file_exists($patch)) {
//                include $patch;
//            }else{
//                $reserv = BASE_DIR . DS . "App\View\Error.phtml";
//                include $reserv;
//            }
//            //сделать маин и калькулятор. в калькуляторе обрабатывать гет или пост через модели и выводить результат
//        }else{
//            $patch = BASE_DIR . DS . "App\View\Main.phtml";
//            include $patch;
//        }

         $patch = BASE_DIR . DS . $myUrl;
         if(file_exists($patch))
         {
             include $patch;
         }
     }
    public static function decoderUrl()
    {
        return \Core\Url::decoderUrl();
    }

    public static function splittUrl($myStr)
    {
        return \Core\Url::splittUrl($myStr);
    }

    public static function ErrorPage404(){
        echo "file not found!!";
    }
    


}

