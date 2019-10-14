<?php
    include_once('models/alumno.model.php');
    include_once('models/espec.model.php');
    include_once('views/admin.view.php');
    include_once('helpers/auth.helper.php');

    class AdminController {
        private $modelAlum;
        private $modelEsp;
        private $view;
        // private $helper;
    
    public function __construct() {
        // $this->helper = new AuthHelper();

        $this->checkLoggedIn();
        
        $this->modelAlum = new AlumnosModel();
        $this->modelEsp = new ModelEsp();
        $this->view = new AdminView();
    }

    public function adminFunctions() {
        $students = $this->modelAlum->getStudents();
        $this->view->showAdmin($students);
    }

    private function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: ' . LOGIN);
            die();
        }
            
    }

    public function cargarAdmTabla(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['dni'];
        $especialidad = $_POST['id_especialidad'];
        if ($nombre != "" && $apellido != "" && $documento !="" && $especialidad !="") {
        $this->modelAlum->saveStudent($nombre,$apellido,$documento,$especialidad);
        $students = $this->modelAlum->getStudents();
        $this->view->showAdmin($students);
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
        $student = $this->modelAlum->getStudent($params[':ID']);
        $this->view->modifyStudent($student, $especialidades);
    }
    public function modifyStudent($params=null){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['dni'];
        $especialidad = $_POST['id_especialidad'];
        if ($nombre != "" && $apellido != "" && $documento !="" && $especialidad !="") {
        $this->modelAlum->modifyStudent($nombre,$apellido,$documento,$especialidad,$params[':ID']);
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
}