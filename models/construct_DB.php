<?php

class construct_DB extends Model{
    function __construct(){
        parent::__construct();
        
    }
    function DB(){

    }
}

//CREATE TABLE `forum`.`accounts` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , `pass-hash` VARCHAR(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , `e-mail` VARCHAR(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;