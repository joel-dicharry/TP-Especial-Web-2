<?php

class AlumnosModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=escuela;charset=utf8', 'root', '');
    }

    public function getStudents() {
        $query = $this->db->prepare('SELECT alumno.id_alumno, alumno.nombre, alumno.apellido, alumno.dni,alumno.imagen, especialidad.nombre_esp AS especialidad FROM alumno JOIN especialidad ON alumno.id_especialidad=especialidad.id_especialidad ORDER BY id_alumno ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function saveStudent($nombre,$apellido,$documento,$especialidad,$imagen=null){
        $nombreImg = null;
        if ($imagen)
        $nombreImg = $this->subirImagen($imagen);
        $query = $this->db->prepare('INSERT  INTO alumno(nombre, apellido, dni, id_especialidad, imagen) VALUES(?,?,?,?,?)');
        $query->execute([$nombre, $apellido, $documento, $especialidad, $nombreImg]); 
    }
    
    public function deleteStudent($id_alumno) {
        $query = $this->db->prepare('DELETE FROM alumno WHERE id_alumno=?');
        $query->execute([$id_alumno]); 
    }
    
    public function getStudent($id_alumno){
        $query = $this->db->prepare('SELECT alumno.id_alumno, alumno.nombre, alumno.apellido, alumno.dni,alumno.imagen,alumno.id_especialidad, especialidad.nombre_esp AS especialidad FROM alumno JOIN especialidad ON alumno.id_especialidad=especialidad.id_especialidad WHERE id_alumno=?');
        $query->execute([$id_alumno]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    public function modifyStudent($id_alumno,$nombre,$apellido,$documento,$especialidad,$imagen=null){
        $nombreImg = null;
        if ($imagen){
        $nombreImg = $this->subirImagen($imagen);
        $query = $this->db->prepare('UPDATE alumno SET nombre=? , apellido=?, dni=?, imagen=?, id_especialidad=? WHERE id_alumno =?');
        $query->execute(array($nombre,$apellido,$documento,$nombreImg,$especialidad,$id_alumno));
        }
        else { 
            $query = $this->db->prepare('UPDATE alumno SET nombre=? , apellido=?, dni=?, id_especialidad=? WHERE id_alumno =?');
            $query->execute(array($nombre,$apellido,$documento,$especialidad,$id_alumno));
            // var_dump($query->errorInfo());
            
        }
    }
    public function getConGenero($id_alumno){
        $query = $this->db->prepare('SELECT  alumno.id_alumno, alumno.nombre, alumno.apellido, alumno.dni,alumno.id_especialidad, especialidad.nombre_esp AS especialidad FROM alumno JOIN especialidad ON alumno.id_especialidad=especialidad.id_especialidad WHERE alumno.id_alumno=?');
        $query->execute([$id_alumno]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function deleteImage($id){
        $imagen = "";
        $query = $this->db->prepare('UPDATE alumno SET imagen=? WHERE id_alumno=?');
        $query->execute([$imagen,$id]);
    }
    private function subirImagen($imagen){
        $target = 'imagenes/alumnos/' . uniqid() . '.jpg';
        move_uploaded_file($imagen, $target);
        return $target;
    }
    
}