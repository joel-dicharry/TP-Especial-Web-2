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
        // $user = $_POST['user'];
        // $pass = $_POST['password'];

        $students = $this->model->getStudents();

        $this->view->showAdmin($students);
    }
    public function cargarAdmTabla(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['dni'];
        $especialidad = $_POST['id_especialidad'];

        $this->model->saveStudent($nombre,$apellido,$documento,$especialidad);
        $students = $this->model->getStudents();
        $this->view->showAdmin($students);
    }
    public function deleteStudent($id_alumno){
        // $id_alumno = $_POST['btn_delete'];
        $this->model->deleteStudent($id_alumno);
        header("Location: administrador");
    }
    public function modifyStudent(){
        $id_alumno= $_POST['btn_modify'];
        var_dump($id_alumno);
        $student = $this->model->getStudent($id_alumno);
        $this->view->showStudent($student);
        
    }
}