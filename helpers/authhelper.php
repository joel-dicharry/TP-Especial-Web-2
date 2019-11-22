<?php
    include_once('./models/user.model.php');

class authHelper{
    
    private $model;

    public function __construct(){
      $this->model=new userModel;  
    }
    
    public function login($user){

        session_start();
        $_SESSION ['EMAIL']=$user->user;
        
    }
    public function logout() {
        session_start();
        session_destroy();
    }
    public function checkSeason(){
            session_start();
            if(!isset($_SESSION ['EMAIL'])){
                session_destroy();
                
            }else{
                return $_SESSION ['EMAIL'];
            }
        
        
    }
    public function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION ['EMAIL'])){
            header('Location: ' . LOGIN);
            die();
        }else{
            $email=$_SESSION ['EMAIL'];
            $Admin=$this->model->getByEmail($email);
                if($Admin->admin==0){
                    header('Location: ' . preceptoras);
                    die();
                }
            }

    }
    
    
}
?>