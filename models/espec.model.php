<?php

class ModelEsp {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=escuela;charset=utf8', 'root', '');
    }
    public function getEspecialidades() {
        $query = $this->db->prepare('SELECT * FROM especialidad ORDER BY id_especialidad ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function getNomb($id_especialidad){
        $query = $this->db->prepare('SELECT * FROM especialidad WHERE id_especialidad=?');
        $query->execute([$id_especialidad]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function addEspec($nombre_esp){
        var_dump($nombre_esp);
        $query = $this->db->prepare('INSERT  INTO especialidad(nombre_esp) VALUES(?)');
        $query->execute([$nombre_esp]);
    }
    public function getConGenero($idespecialidad){
    $query = $this->db->prepare('SELECT  alumno.nombre, alumno.apellido, alumno.dni, especialidad.nombre_esp AS especialidad FROM alumno JOIN especialidad ON alumno.id_especialidad=especialidad.id_especialidad WHERE alumno.id_especialidad=?');
        $query->execute([$idespecialidad]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}