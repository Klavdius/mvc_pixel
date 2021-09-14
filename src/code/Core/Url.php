<?php
namespace Core;

class Url
{

    public static function decoderUrl()
    {
        $getParams = $_GET;
        $postParams = $_POST;
        $serverData = $_SERVER;
        $getUrl = $_SERVER['REQUEST_URI'];
        if($getUrl == '/'){
            $getUrl = '/App/View/Main.phtml';
        }
        return $getUrl;

    }

    public static function splittUrl($myStr)
    {
      $resultArr = [];

        $arr = trim($myStr,'/');
        $index = substr_count($arr,'/');
        if($index != 0) {
            for ($i = 0; $i < $index; $i++) {
                $resultArr[$i] = stristr($arr, '/', true);
                $arr = stristr($arr, '/');
                $arr = trim($arr, '/');
            }
            $resultArr[$index] = $arr;
        }else{
            $resultArr[$index] = $arr;
        }
     return $resultArr;


    }
}