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
    public function addActa($contenido,$puntaje,$id_alumno){
        $query = $this->db->prepare('INSERT  INTO actas(contenido_act,puntaje, id_alumno_fk) VALUES(?,?,?)');
        $query->execute([$contenido,$puntaje, $id_alumno]); 
    }

    public function borrarActa($id){
        $query = $this->db->prepare('DELETE FROM actas WHERE id_comentario=?');
        $query->execute([$id]); 
    }
}