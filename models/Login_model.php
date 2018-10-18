<?php

class Login_model extends Model {
    function __construct(){
        parent::__construct();
               
        if(isSet($_SESSION['login']))
    {
        header('Location:/forum/home');
        
    }
        if(isSet($_POST['Login'])){
                $login=$_POST['Login'];
                $pass=$_POST['Pass'];
                $login=htmlentities($login);
        }
            try{    
                         $acc=$this->pdo->prepare("SELECT*FROM accounts WHERE login =:login ");
                         $acc->bindParam(':login',$login);
                         $acc->execute();
                         $result=$acc->fetch(PDO::FETCH_OBJ);
                         $num_acc=$acc->rowCount();
                         if($num_acc>0)
                         {
                            if(password_verify($pass,$result->pass)){
                                $this->Login($result);
                             } 
                             else $this->FiledLogin();
                         } 
                         else $this->FiledLogin();                      
            }
            catch(PDOException $e)
            {
               echo '<pre>'.$e.'</pre>'; 
            }        
           print_r($_POST);
           print_r($_SESSION);

    }
    private function Login($result){
                $_SESSION['login']=true;
                $_SESSION['id_user']=$result->id;
                unset($_SESSION['FAIL']);
                echo $_SESSION['id_user'];
           }
    private function FiledLogin(){
            echo 'Niepoprawny Login Lub haslo';
            if(Isset($_SESSION['FAIL'])){
                $_SESSION['FAIL']++;
            }else{
                $_SESSION['FAIL']=0;
            }
           }
    public function Logout(){
            unset( $_SESSION['login']);
            unset($_SESSION['id_user']);
    }
}
