<?php
include_once('models/task.model.php');
include_once('views/task.view.php');

class InicioController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    public function showHome() {
        $students = $this->model->getStudents();

        if($students) {
            $this->view->showHome($students);
        }
    }

    public function adminFunctions() {
    }
}