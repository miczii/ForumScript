<?php
 
class View {
    function __construct(){

    }
    public function Render(){
        require_once 'views/header.php';
        
       
    }
    public function Home(){
        require_once 'views/Home/Home.php';
    }
    public function Login(){
        require_once 'views/Login/Login.php';
    }
    public function Register(){
        require_once 'views/Register/Register.php';
    }    

 }
 