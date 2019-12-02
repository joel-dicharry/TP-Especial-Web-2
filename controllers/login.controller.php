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
        $registro = false;
        $this->view->showLogin(NULL, $registro);
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
            $registro = false;
            $this->view->showLogin(NULL, $registro);
        }
    }

    public function createUser() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordcheck = $_POST['passwordcheck'];
        $question = $_POST['question'];
        $checkuser = false;
        if ( !empty($username) && !empty($email) && !empty($password) && !empty($passwordcheck) && !empty($question) ) {
            var_dump("campos llenos");
            if($password == $passwordcheck){
                if( !($this->model->checkUser($username)) && !($this->model->checkEmail($email))){
                    $hash= password_hash($password, PASSWORD_DEFAULT);
                    $this->model->newUser($username,$email, $hash);
                    session_start();
                    $_SESSION['EMAIL'] = $email;
                    $_SESSION['USERNAME'] = $username;
                    header('Location: ' . ADMIN);
                } else if ($this->model->checkEmail($email)) {
                    $error = "El correo ya fué registrado, intente con otro";
                    $this->view->showLogin($error, true);
                } else if ($this->model->checkUser($username)) {
                    $error = "El nombre de uauario ya fué registrado, intente con otro";
                    $this->view->showLogin($error, true);
                }
            } else {
                $error = "contraseña mal repetida";
                $this->view->showLogin($error, true);
            }
        } else {
            $error = "Datos incompletos";
            $this->view->showLogin($error, true);
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . HOME);
    }
    public function recuperarContraseña(){
        $this->view->recuperarContraseña();
    }
    public function verifyAnswer(){
        $email = $_POST['email'];
        $user = $this->model->getByEmail($email);
            if ($user) {
                $pregunta = $_POST['question'];
                if($user->rta_question == $pregunta){
                $contraseña = $_POST['password'];
                $repeatcontraseña = $_POST['passwordcheck'];
                if ($contraseña == $repeatcontraseña) {
                   $hash= password_hash($contraseña, PASSWORD_DEFAULT);
                   $this->model->newPassword($hash, $user->id_usuario);
                   header('Location: ' . LOGIN);
                }
            }
        }
    }
}