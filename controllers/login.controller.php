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
}