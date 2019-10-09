<?php

include_once('models/alumno.model.php');
include_once('views/alumno.view.php');

class AlumnosController {
    private $model;
    private $view;

    public function __construct() {

        $this->model = new AlumnosModel();
        $this->view = new AlumnosView();
    }

    public function showHome(){
        $students = $this->model->getStudents();
        $this->view->showStudents($students);
    }
    public function showStudent($params=null){
        $student = $this->model->getStudent($params[':ID']);
        $this->view->showStudent($student);
    }
}