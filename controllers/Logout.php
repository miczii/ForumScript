<?php
Class Logout{
    function __construct(){
        unset($_SESSION['id_user']);
        unset($_SESSION['login']);
        
        header('Location:/forum/home');
    }
}