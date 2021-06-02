<?php


class Route
{
    public static function helloRoute(){
        $mes = "Route say hello ";
        return $mes;
    }

    public static function requst($newUrl){
        if(empty($newUrl)){
           $list = file_get_contents('src\list\main.html',true);
        echo $list;
        return true;
        }
//        $nameFile =($newUrl.'.html');
        $rootUrl = ('scr\list\\'  . $newUrl . '.html');
        $rootUrl=trim($rootUrl," ");
        echo $rootUrl;
        if( ($list = file_get_contents("$rootUrl")) == false){
            $list = file_get_contents('src\list\error.html');
            echo $list;

        }

    }
}