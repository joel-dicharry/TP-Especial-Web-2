<?php
require_once("./views/json.view.php");
require_once("./models/actas.model.php");
class ComentariosApiController {
    private $actasmodel;
    private $viewapi;
    private $data;

    public function __construct() {
        $this->viewapi = new JSONView();
        $this->actasmodel = new ActasModel();
        $this->data = file_get_contents("php://input");
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
    public function agregarActa($params=null){
        $data = $this->getData();
        $contenido = $data->contenido_act;
        $puntaje = $data->puntaje;
        $id= $data->id_alumno_fk;
        $envio =$this->actasmodel->addActa($contenido,$puntaje,$id);
        if($envio){
            $this->viewapi->response($envio, 200);    
        }
    }
        // header("Location: " . "actasAl
    public function deleteActa($params=null){
        if($params[':ID']){
            $this->actasmodel->borrarActa($params[':ID']);
            $this->viewapi->response("Acta eliminada con exito!", 200);    
        }
            else {
                $this->viewapi->response("El numero de acta es inexistente", 404);    
            }
        }
    }