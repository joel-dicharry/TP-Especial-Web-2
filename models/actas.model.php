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
}