<?php

class Model {
function __construct() {
    $this->pdo= new PDO('mysql:host=localhost;dbname=forum','root','');
}
}