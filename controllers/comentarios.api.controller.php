<?php
require_once("./views/json.view.php");
require_once("./models/actas.model.php");
class ComentariosApiController {
    private $actasmodel;
    private $viewapi;

    public function __construct() {
        $this->viewapi = new JSONView();
        $this->actasmodel = new ActasModel();
    }
    private function getData() {
        return json_decode($this->data);
    }

    public function getActas ($params=null){
        $actas = $this->actasmodel->getActasById($params[':ID']);
    
        if ($actas)
            $this->viewapi->response($actas, 200);    
        else
            $this->viewapi->response("El alumno no tiene actas", 404);
    }
    public function agregarActa(){
        $data = $this->getData();

        // $contenido= $_POST['contenido'];
        if($data->contenido !=""){
            if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg"|| $_FILES['input_name']['type'] == "image/png" ) {
                $imagen=$_FILES['input_name']['tmp_name'];
            }
            $this->actasmodel->addActa($params[':ID'],$data->contenido,$imagen);
        }
        header("Location: " . actasAlumnos/$params[':ID']);
    }


}