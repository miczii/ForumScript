<?php

class Home extends Controller {
    function __construct($params){
        parent::__construct();
        require_once 'models/Index_model.php';
        $this->model = new Index_model;
        
        $action = "Home";
        if(isset($params[1])) $action = ucfirst($params[1]);
        // $this ->date = "today";
        // if(isset($params[2])) $this->date = ucfirst($params[2]);
        
        $this->$action();
    }

    private function Home(){
        
        
        $this->view->Render();
        $this->view->Home();
    }
}