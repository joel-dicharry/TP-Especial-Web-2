<?php
    include_once('models/alumno.model.php');
    include_once('models/espec.model.php');
    include_once('models/user.model.php');
    include_once('views/admin.view.php');
    include_once('helpers/authhelper.php');
    include_once('views/alumno.view.php');


    class AdminController {
        private $modelAlum;
        private $modelEsp;
        private $modelUsers;
        private $view;
        private $helper;
        private $studentView;
    
    public function __construct() {
             
        $this->helper = new AuthHelper();
        $this->modelAlum = new AlumnosModel();
        $this->modelEsp = new ModelEsp();
        $this->modelUsers = new userModel();
        $this->view = new AdminView();
        $this->studentView = new AlumnosView();

    }

    public function adminFunctions() {
        $this->helper->checkLoggedIn();
        $students = $this->modelAlum->getStudents();
        $especialidades = $this->modelEsp->getEspecialidades();
        $users = $this->modelUsers->getUsers();
        $this->view->showAdmin($students,$especialidades,$users);
    }
    public function cargarAdmTabla(){
        $this->helper->checkLoggedIn();
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
        $this->helper->checkLoggedIn();
        $this->modelAlum->deleteStudent($params[':ID']);
        header("Location: " . ADMIN);
    }

    public function modifyForm($params=null){
        $this->helper->checkLoggedIn();
        $student = $this->modelAlum->getStudent($params[':ID']);
        $especialidades = $this->modelEsp->getEspecialidades();
        $this->view->modifyStudent($student,$especialidades);
    }

    public function modifyStudent($params=null){
        $this->helper->checkLoggedIn();
        $id=$params[':ID'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['dni'];
        $especialidad = $_POST['id_especialidad'];
        if($_FILES['input_img']['type'] == "image/jpg" || $_FILES['input_img']['type'] == "image/jpeg"|| $_FILES['input_img']['type'] == "image/png" ) {
            $imagen=$_FILES['input_img']['tmp_name'];
            $this->modelAlum->modifyStudent($id,$nombre,$apellido,$documento,$especialidad,$imagen);

        }
        else {
            $this->modelAlum->modifyStudent($id,$nombre,$apellido,$documento,$especialidad  );
        }
            header("Location: " . ADMIN);
    }
    public function deleteImage($params=null){
        $id=$params[':ID'];
        $alumno = $this->modelAlum->getStudent($id);
        unlink($alumno->imagen);
        if($id)
        $this->modelAlum->deleteImage($id);
        header("Location: " . ADMIN);

    }

    public function addEspec(){
        $this->helper->checkLoggedIn();
        $nombre_esp = $_POST['especialidad'];
        $this->modelEsp->addEspec($nombre_esp);
        header("Location: " . ADMIN);
    }

    public function deleteEspecialidad($params=null){
        $this->helper->checkLoggedIn();
        $this->modelEsp->eliminarEsp($params[':ID']);
        header("Location: " . ADMIN);
    }

    public function modifyEspForm($params=null){
        $this->helper->checkLoggedIn();
        $especialidad = $this->modelEsp->getNomb($params[':ID']);
        $this->view->modifyEsp($especialidad);
    }

    public function modifyEspecialidad($params=null){
        $this->helper->checkLoggedIn();
        $nombre = $_POST['nombre-esp'];

        if($nombre !=""){
            $this->modelEsp->modifyEsp($nombre,$params[':ID']);
            header("Location: " . ADMIN);
        }
        else {
            var_dump(error);
        }
    }
    public function showPrecept(){
        $session=$this->helper->checkSeason();
        $user = $this->modelUsers->getByEmail($session);
        $students = $this->modelAlum->getStudents();
        $especialidades = $this->modelEsp->getEspecialidades();
        if($session){
        $this->view->showPrecept($students,$user);
        }
        else {
        $this->studentView->showStudents($students, $especialidades);
        }
    }
    public function addActas($params=null){
        $session=$this->helper->checkLoggedInandAdmin();
        $student = $this->modelAlum->getStudent($params[':ID']);
        if($session){
            $this->view->addActas($student,$session);
            }
        else {
            $especialidades = $this->modelEsp->getEspecialidades();
            $students = $this->modelAlum->getStudents();
            $this->studentView->showStudents($students, $especialidades);
        }
    }
    public function modificarPermisos($params=null){
        $id=$params[':ID'];
        $usuario=$this->modelUsers->getByid($id);
        if( $usuario->admin==1){
            $this->modelUsers->modificarPermiso($usuario->id_usuario, 0);
        }elseif($usuario->admin==0){
            $this->modelUsers->modificarPermiso($usuario->id_usuario, 1);
        }
        header ("Location: ../administrador");
    }
    public function eliminarUsuario($params=null){
        $id=$params[':ID'];
        $this->modelUsers->eliminarUsuario($id);
        header ("Location: ../administrador");

    }
}