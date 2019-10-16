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

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . LOGIN);
    }
}