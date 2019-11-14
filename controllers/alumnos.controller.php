<?php

include_once('models/alumno.model.php');
include_once('views/alumno.view.php');
include_once('models/espec.model.php');

class AlumnosController {
    private $model;
    private $view;
    private $modelEsp;


    public function __construct() {
        $this->model = new AlumnosModel();
        $this->view = new AlumnosView();
        $this->modelEsp = new ModelEsp();
    }

    public function showHome(){
        $students = $this->model->getStudents();
        $especialidades = $this->modelEsp->getEspecialidades();
        $this->view->showStudents($students, $especialidades);
    }

    public function showStudent($params=null){
        $student = $this->model->getStudent($params[':ID']);
        $this->view->showStudent($student);
    }
    
    public function filtrarEsp($params=null){
        $student = $this->modelEsp->getConGenero($params[':ID']);
        $especialidades = $this->modelEsp->getEspecialidades();
        $this->view->showFiltro($student, $especialidades);
    }
    public function registro(){
        $this->view->showSingIn();
    }
    public function registro(){
        $this->view->showSingIn();
    }
}