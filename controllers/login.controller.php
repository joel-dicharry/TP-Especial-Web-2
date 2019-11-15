<?php
include_once('./views/login.view.php');
include_once('./models/user.model.php');

class LoginController {

    private $view;
    private $model;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
    }

    public function showLogin(){
        $this->view->showLogin();
    }
    
    public function verifyUser() {
        $email = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->model->getByEmail($email);

        if ( $user && password_verify($password, $user->contrasenia)) {
            var_dump("llegoal if");
            session_start();
            $_SESSION['ID_USER'] = $user->id_usuario;
            $_SESSION['USERNAME'] = $user->email;
            header('Location: ' . ADMIN);
        } else {
            $this->view->showLogin();
        }
    }
    public function createUser() {
        $usuario = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordcheck = $_POST['passwordcheck'];
        $checkuser = false;
        var_dump($usuario,$email,$password,$passwordcheck);
        // if ($usuario != "" && $email != "" && $password !="" && $password !="") {
        //     if($password == $passwordcheck){
        //         // if($this->model->checkUser($usuario)){
        //         //     //usuario ya esta registrado vuelve al login
        //         // }
        //         // else if ($this->model->checEmail($email) {
        //         //     // email vinculado a otra cuenta vuelve al login
        //         // }    
        //         $this->model->newUser($usuario,$email, $password);
        //     }
        // }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . LOGIN);
    }
}