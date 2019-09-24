<?php

class TaskModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=escuela;charset=utf8', 'root', '');
    }

    public function getStudents() {
        $query = $this->db->prepare('SELECT * FROM alumno ORDER BY id_especialidad ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function addEspec($nombre_esp){
        $query = $this->db->prepare('INSERT  INTO especialidad(nombre_esp) VALUES(?)');
        $query->execute([$nombre_esp]);
    }
    public function saveStudent($nombre,$apellido,$documento,$especialidad){
        $query = $this->db->prepare('INSERT  INTO alumno(nombre, apellido, dni, id_especialidad) VALUES(?,?,?,?)');
        $query->execute([$nombre, $apellido, $documento, $especialidad]); 
    
    }
    public function deleteStudent($id_alumno) {
        $query = $this->db->prepare('DELETE FROM alumno WHERE id_alumno=?');
        $query->execute([$id_alumno]); 
    }
    public function getStudent($id_alumno){
        $query = $this->db->prepare('SELECT * FROM alumno WHERE id_alumno=?');
        $query->execute([$id_alumno]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function modifyStudent($nombre,$apellido,$documento,$especialidad,$id_alumno){
        $query = $this->db->prepare('UPDATE alumno SET nombre=? , apellido=?, dni=?, id_especialidad=? WHERE id_alumno =?');
        $query->execute(array($nombre,$apellido,$documento,$especialidad,$id_alumno));
        //var_dump($query->errorinfo());
    }
}