<?php

class View 
{
    function __construct(){
       // echo 'this is the view';
    }

    public function render($name,$noInclude=false)
    {
        if($noInclude==true){
            require 'view/'.$name.'.php';
        }else{
            require 'view/partials/header.php';
            require 'view/'.$name.'.php';
            require 'view/partials/footer.php';
        }
       
    }
}


?>