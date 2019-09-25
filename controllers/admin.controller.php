<?php
    include_once('views/user.view.php');
    include_once('models/user.model.php');
    include_once('models/alumno.model.php');

class AdminController {
    private $usermodel;
    private $model;
    private $view;
    
    
    public function __construct() {
        $this->usermodel = new TaskModel();
        $this->view = new TaskView();
    }

    public function adminFunctions() {
        $students = $this->model->getStudents();
        $this->view->showAdmin($students);
    }
}