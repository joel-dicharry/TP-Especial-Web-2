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
            session_start();
            $_SESSION['ID_USER'] = $user->id_usuario;
            $_SESSION['EMAIL'] = $user->email;
            $_SESSION['USERNAME'] = $user->username;
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
        if ( !empty($usuario) && !empty($email) && !empty($password) && !empty($passwordcheck) ) {
            if($password == $passwordcheck){
                if( !($this->model->checkUser($usuario)) && !($this->model->checkEmail($email))){
                    $hash= password_hash($password, PASSWORD_DEFAULT);
                    $this->model->newUser($usuario,$email, $hash);
                    $noticia ="Felicitaciones, usted fué registrado con éxito!";
                    $this->view->showLogin($noticia);
                } else if ($this->model->checkEmail($email)) {  // email vinculado a otra cuenta vuelve al login
                    $error = "El correo ya fué registrado, intente con otro";
                    $this->view->showLogin($error);
                } else if ($this->model->checkUser($usuario)) {
                    $error = "El nombre de uauario ya fué registrado, intente con otro";
                    $this->view->showLogin($error);
                }
            } else {
                $error = "contraseña mal repetida";
                $this->view->showLogin($error);
            }
        } else {
            $error = "Datos incompletos";
            $this->view->showLogin($error);
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . LOGIN);
    }
    public function recuperarContraseña(){
        $this->view->recuperarContraseña();
    }
    public function verifyAnswer(){
        $email= $_POST['email'];
        $user=$this->model->getByEmail($email);
            if ($user) {
                $pregunta=$_POST['question'];
                if($user->rta_question==$pregunta){
                $contraseña=$_POST['password'];
                $repeatcontraseña=$_POST['passwordcheck'];
                if ($contraseña==$repeatcontraseña) {
                   $this->model->newPassword($contraseña, $user->id_usuario);
                }
            }
        }
    }
}