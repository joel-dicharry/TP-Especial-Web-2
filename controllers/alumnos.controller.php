<?php

include_once('models/alumno.model.php');
include_once('views/alumno.view.php');
include_once('models/actas.model.php');
include_once('models/espec.model.php');
class AlumnosController {
    private $model;
    private $actasmodel;
    private $modelEsp;
    private $view;


    public function __construct() {
        $this->model = new AlumnosModel();
        $this->view = new AlumnosView();
        $this->modelEsp = new ModelEsp();
        $this->actasmodel = new ActasModel();
    }

    public function showHome(){
        $students = $this->model->getStudents();
        $especialidades = $this->modelEsp->getEspecialidades();
        $this->view->showStudents($students, $especialidades);
    }

    public function showStudent($params=null){
        $student = $this->model->getStudent($params[':ID']);
        $actas = $this->actasmodel->getActasById($student->id_alumno);
        var_dump($actas);
        $this->view->showStudent($student, $actas);
    }
    
    public function filtrarEsp($params=null){
        $student = $this->modelEsp->getConGenero($params[':ID']);
        $especialidades = $this->modelEsp->getEspecialidades();
        $this->view->showFiltro($student, $especialidades);
    }
    public function registro(){
        $this->view->showSingIn();
    }
}