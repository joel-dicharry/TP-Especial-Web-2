<?php

include_once('models/alumno.model.php');
include_once('views/alumno.view.php');
include_once('models/espec.model.php');
include_once('helpers/authhelper.php');
include_once('./models/user.model.php');


class AlumnosController {
    private $model;
    private $modelEsp;
    private $view;
    private $helper;
    private $UserModel;




    public function __construct() {
        $this->model = new AlumnosModel();
        $this->view = new AlumnosView();
        $this->modelEsp = new ModelEsp();
        $this->helper = new AuthHelper();
        $this->UserModel = new userModel();

    }

    public function showHome(){
        $session=$this->helper->checkSeason();
        $students = $this->model->getStudents();
        $especialidades = $this->modelEsp->getEspecialidades();
        if($session){
            $user = $this->UserModel->getByEmail($session);
            $this->view->showStudents($students, $especialidades,$session,$user);
        }
        else {
            $this->view->showStudents($students, $especialidades);
        }
    }

    public function showStudent($params=null){
        $student = $this->model->getStudent($params[':ID']);
        $this->view->showStudent($student);
    }
    
    public function filtrarEsp($params=null){
        $student = $this->modelEsp->getConGenero($params[':ID']);
        $especialidades = $this->modelEsp->getEspecialidades();
        $this->view->showStudents($student, $especialidades);
    }
    public function registro(){
        $this->view->showSingIn();
    }
}