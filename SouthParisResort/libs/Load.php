<?php

class Load{

    function __construct(){
        $url=isset($_GET['url']) ? $_GET['url'] : null;
        $url=rtrim($url,'/');
        $url=explode('/',$url);
        //print_r($url);

        if(empty($url[0])){
            require 'controller/HotelController.php';
            $controller=new HotelController();
            $controller->index();
            return false;
        }

        $file='controller/'.$url[0].'.php';
        if(file_exists($file)){
            require $file;
        } else{
            require 'controller/ErrorController.php';
            $controller=new ErrorController();
            return false;
          // throw new Exception("The file: $file Does not exists.");
        }

        
        $controller=new $url[0];
        $controller->loadModel($url[0]);
        //calling methods
        if(isset($url[2])){
            if(method_exists($controller,$url[1])){
                $controller->{$url[1]}($url[2]);
            }else{
                $this->error();
            }
            
        }else{
            if(isset($url[1])){
                $controller->{$url[1]}();
               
            }else{
                $controller->index();
            }
        }
        
    }

    function error(){
        require 'controller/ErrorController.php';
        $controller=new ErrorController();
        $controller->index();
        return false;
    }

}

?>