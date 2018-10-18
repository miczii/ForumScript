<?php

class Register_model extends Model {
    function __construct(){
        parent::__construct();
            if(isSet($_POST['Login'])){
                    $this->register();
                    
            }
        }
       
    

        private function register(){
                    if ($this->validation=true){
                        try{
                        $this->password=$_POST['Pass'];
                        $q= $this->pdo->prepare("INSERT INTO `accounts` (`id`, `login`, `pass`, `e-mail`) VALUES (NULL, :login, :password, :e-mail");
                        $q->bindParam(':password',$this->password, PDO::PARAM_STR);
                        $q->bindParam(':login',$_POST['Login'], PDO::PARAM_STR);
                        $q->bindParam(':e-mail',$_POST['Mail'], PDO::PARAM_STR);
                        $data=array(
                            ":login"=>$_POST['Login'],
                            ":password"=>$this->password,
                            ":e-mail"=>$_POST['Mail']
                        );
                        $q->execute($data);
                        
                        }

                        catch(PDOException $e){
                            echo '<pre>'.$e.'</pre>'; 
                        }
                    }
            }
        private function validation(){  
                    $login=$_POST['Login'];
                    $pass=$_POST['Pass'];
                    $pass2=$_POST['Pass2'];
                    $mail=$_POST['Mail'];

 //Checking login lenght
                    $num=strlen($login);
                    if($num>4 && $num<24){
                        $validation=true;
                    }else{
                        $validation=false;
                    }
                    


            return $validation;
        }
    }