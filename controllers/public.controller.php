<?php

include_once('models/alumno.model.php');
include_once('views/alumno.view.php');

class InicioController {

    private $model;
    private $view;
    private $modelesp;

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
}
    