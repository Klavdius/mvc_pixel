<?php


class Tools
{
    public static function DecodeUrl($url){
        $tck = strpos($url,'.');

        if(substr($url,0,1) == "/"){
            $url = substr($url,1);
        }

        if (!empty($tck)) {
            $endLine = substr($url,$tck);
            $lenEnd = strlen($endLine);
            $url = substr($url,0, (strlen($url) - ($lenEnd + 1)));

        }
            $rootUrl = ('src/code/' . "$url" . '.php');
        return $rootUrl;



    }
}