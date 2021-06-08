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
           $list = file_get_contents('src\list\main.html',true);
        return true;
        }
        //build main root
            $rootUrl = ('src/list/' . "$newUrl" . '.html');
            $rootUrl=trim($rootUrl," ");
         //check file in system
        if(!(file_exists("$rootUrl")) ){
            $list = file_get_contents('src\list\error.html',true);
            echo $list;
            return false;
        }
        //output file
            $list = file_get_contents("$rootUrl",true);
            echo $list;
            return true;
    }
}