<?php

class Register extends Controller {
    function __construct($params){
        parent::__construct();
        require_once 'models/Register_model.php';
        $this->model = new Register_model;
        
        $action = "Register";
        if(isset($params[1])) $action = ucfirst($params[1]);
        
        $this->$action();
    }

    private function Register(){
        
        
        $this->view->Render();
        $this->view->Register();
    }
}