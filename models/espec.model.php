<?php

class ModelEsp {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=escuela;charset=utf8', 'root', '');
    }

    public function addEspec($nombre_esp){
        var_dump($nombre_esp);
        $query = $this->db->prepare('INSERT  INTO especialidad(nombre_esp) VALUES(?)');
        $query->execute([$nombre_esp]);
    }

    public function getConGenero($idpelicula){
        $query = $this->db->prepare('SELECT alumno.nombre, alumno.apellido, alumno.dni AS especialidad FROM alumno JOIN especialidad ON alumno.id_especialidad=especialidad.nombre WHERE alumno.id_alumno=?');
        $query->execute([$idpelicula]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}