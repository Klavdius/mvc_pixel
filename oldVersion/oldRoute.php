<?php
//define('DS', DIRECTORY_SEPARATOR);
//define('BASE_DIR', dirname(__DIR__));
//define('br', "</br>");



class oldRoute
{
    public static function  start(){
        $contant = "start all </br>";
        echo $contant;
        //Search url
        if (empty($_SERVER['REQUEST_URI'])) {
            $url = $_SERVER['PHP_SELF'] . (empty($_SERVER['QUERY_STRING']) ? '' : '?' . $_SERVER['QUERY_STRING']);
        } else {
            $url = $_SERVER['REQUEST_URI'];
        }

        Route::requst($url);
    }
    public static function helloRoute(){
        $mes = "route say hello ";
        return $mes;
    }

    public static function requst($newUrl){
        //check for an empty url
        $sep = explode('/',$newUrl);
        if(empty($sep[1])){
            $list = file_get_contents('src/code/main.php',true);
            return true;
        }

        $rootUrl = Tools::DecodeUrl($newUrl);
        $rootUrl = trim($rootUrl, " ");

        if(!(file_exists("$rootUrl")) ){
            echo $rootUrl . " по этому пути ищем " . br;
            $list = file_get_contents('src\list\error.html',true);
            echo $list;
            return false;
        }
        //output file
        $list = file_get_contents("$rootUrl",true);
        echo $list;

        if($rootUrl == 'src/code/main.php') {
            Foreman::build();
        }
        return true;
    }
}

