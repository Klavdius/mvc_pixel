<?php


class Route
{
    public static function helloRoute(){
        $mes = "Route say hello ";
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

