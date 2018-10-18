<?php

class Login extends Controller {
    function __construct($params){
        parent::__construct();
        require_once 'models/Login_model.php';
        $this->model = new Login_model;
        
        $action = "Login";
        if(isset($params[1])) $action = ucfirst($params[1]);
        
        $this->$action();
    }

    private function Login(){
        
        
        $this->view->Render();
        $this->view->Login();
    }
}