<?php

class Home extends Controller {
    function __construct($params){
        parent::__construct();
        require_once 'models/BugLog_model.php';
        $this->model = new BugLog_model;
        
    
    }
}