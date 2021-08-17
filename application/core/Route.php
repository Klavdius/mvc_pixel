<?php
define('DS', DIRECTORY_SEPARATOR);
define('BASE_DIR', dirname(__DIR__));
define('br', "</br>");



class Route
{
     static function  start()
     {
       $controller_name = 'Main';
       $action_name = 'index';

       $routes = explode('/', $_SERVER['REQUEST_URI']);

       if(!empty($routes[1]))
       {
           $controller_name = $routes[1];
       }
        //echo $controller_name . "</br>";

       if(!empty($routes[2]))
       {
           $action_name = $routes[2];
       }
       // echo $action_name. "</br>";

       $model_name = 'model_'.$controller_name;
       $controller_name = 'controller_'.$controller_name;
       $action_name = 'action_'.$action_name;



       $model_file = strtolower($model_name).'.php';
       $model_path = "application/models/".$model_file;
       if(file_exists($model_path))
       {
           include "application/models/".$model_file;
       }

       $controller_file = strtolower($controller_name).'.php';
       $controller_path = "application/controllers/".$controller_file;
         //echo "controller path-- ". "$controller_path". "</br>";
       if(file_exists($controller_path))
       {
           include "application/controllers/".$controller_file;
       }
       else
       {
           Route::ErrorPage404();
       }

       $controller = new $controller_name;
       $action = $action_name;

       if(method_exists($controller, $action))
       {
            $controller->$action();
       }
       else
       {
            Route::ErrorPage404();
       }


     }


    public static function ErrorPage404(){
        echo "file not found!!";
    }
    


}

