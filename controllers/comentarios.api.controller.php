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

    public function getTasks ($params=null){
        $actas = $this->actasmodel->getActasById($params[':ID']);
        
        if ($actas)
            $this->viewapi->response($actas, 200);    
        else
            $this->viewapi->response("El alumno no tiene actas", 404);
    } 


}