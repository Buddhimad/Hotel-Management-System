<?php

class ErrorController extends Controller
{
    function __construct(){
        parent::__construct();
       

    }
    
    public function index(){
        $this->view->msg='This page doesnt exist';
        $this->view->render('error');
    }
}

?>