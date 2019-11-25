<?php

class ActasModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=escuela;charset=utf8', 'root', '');
    }

    public function getActasById($idalumno){
        $query = $this->db->prepare('SELECT * FROM actas WHERE id_alumno_fk=?');
        $query->execute([$idalumno]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function addActa($contenido,$id_alumno,$imagen=null){
        $nombreImg = null;
        if ($imagen)
        $nombreImg = $this->subirImagen($imagen);
        $query = $this->db->prepare('INSERT  INTO actas(contenido_act, id_alumno_fk, imagen) VALUES(?,?,?)');
        $query->execute([$contenido, $id_alumno, $contenido, $nombreImg]); 
    }
    private function subirImagen($imagen){
        $target = 'imagenes/actas/' . uniqid() . '.jpg';
        move_uploaded_file($imagen, $target);
        return $target;
    }
}