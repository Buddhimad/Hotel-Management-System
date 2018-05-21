<?php

class Controller 
{
    function __construct(){
       // echo "Main Controller";
        $this->view =new View();

      
    }

    public function loadModel($name){

        $path='model/'.$name.'.php';

        if(file_exists($path)){
            require 'model/'.$name.'.php';
            $modelName=$name;
            $this->model=new $modelName;
        }
    }
}


?>