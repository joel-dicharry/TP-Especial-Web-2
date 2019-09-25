<?php
include_once('./views/alumno.view.php');
include_once('./models/alumno.model.php');

class LoginController {

    private $view;
    private $model;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
    }
}