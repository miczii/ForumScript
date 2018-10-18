<?php
 class Router {
     
     function __construct() {
         $this->request = $_GET['url'];
         $this->request = rtrim($this->request, "/");
         $this->params = explode("/", $this->request);

         $this->controller=$this->params[0];
         if($this->controller=="index.php") $this->controller = "Home";
         $this->controller= ucfirst($this->controller);
        

         $file='controllers/'.$this->controller.'.php';
         if(file_exists($file)){
             require_once 'controllers/'.$this->controller.".php";
            $this->control = new $this->controller($this->params);
         }
         else{
             echo "Blad 404";
         }
        
        }

 }