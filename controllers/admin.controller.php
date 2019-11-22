<?php
    include_once('models/alumno.model.php');
    include_once('models/espec.model.php');
    include_once('views/admin.view.php');
    include_once('helpers/authhelper.php');

    class AdminController {
        private $modelAlum;
        private $modelEsp;
        private $view;
        private $helper;
    
    public function __construct() {
             
        $this->helper = new AuthHelper();
        $this->modelAlum = new AlumnosModel();
        $this->modelEsp = new ModelEsp();
        $this->view = new AdminView();
        $this->helper->checkLoggedIn();
    }

    public function adminFunctions() {
        $students = $this->modelAlum->getStudents();
        $especialidades = $this->modelEsp->getEspecialidades();
        $this->view->showAdmin($students,$especialidades);
        // var_dump($students);
    }
    public function cargarAdmTabla(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['dni'];
        $especialidad = $_POST['id_especialidad'];

        if ($nombre != "" && $apellido != "" && $documento !="" && $especialidad !="") {
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg"|| $_FILES['input_name']['type'] == "image/png" ) {
            $imagen=$_FILES['input_name']['tmp_name'];
        }
        $this->modelAlum->saveStudent($nombre,$apellido,$documento,$especialidad,$imagen);
        header('Location: ' . ADMIN);
        }
        else {
            $error ="Faltan Datos";
            $this->view->showError($error);
        }
    }

    public function deleteStudent($params=null){
        $this->modelAlum->deleteStudent($params[':ID']);
        header("Location: " . ADMIN);
    }

    public function modifyForm($params=null){
        $student = $this->modelAlum->getConGenero($params[':ID']);
        $this->view->modifyStudent($student);
    }

    public function modifyStudent($params=null){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['dni'];
        $especialidad = $_POST['id_especialidad'];

        if ($nombre != "" && $apellido != "" && $documento !="" && $especialidad !="") {
            if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg"|| $_FILES['input_name']['type'] == "image/png" ) {
            $imagen=$_FILES['input_name']['tmp_name'];
        }   
            $this->modelAlum->modifyStudent($nombre,$apellido,$documento,$especialidad,$imagen,$params[':ID']);
            header("Location: " . ADMIN);
        }
        else {
            var_dump(error);
        }
    }

    public function addEspec(){
        $nombre_esp = $_POST['especialidad'];
        $this->modelEsp->addEspec($nombre_esp);
        header("Location: " . ADMIN);
    }

    public function deleteEspecialidad($params=null){
        $this->modelEsp->eliminarEsp($params[':ID']);
        header("Location: " . ADMIN);
    }

    public function modifyEspForm($params=null){
        $especialidad = $this->modelEsp->getNomb($params[':ID']);
        $this->view->modifyEsp($especialidad);
    }

    public function modifyEspecialidad($params=null){
        $nombre = $_POST['nombre-esp'];

        if($nombre !=""){
            $this->modelEsp->modifyEsp($nombre,$params[':ID']);
            header("Location: " . ADMIN);
        }
        else {
            var_dump(error);
        }
    }
}