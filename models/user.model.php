<?php

class userModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=escuela;charset=utf8', 'root', '');
    }
    public function getUsers(){
        $query = $this->db->prepare('SELECT * FROM usuarios ORDER BY id_usuario ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function getByid($id_user) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE id_usuario = ?');
        $query->execute(array($id_user));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function getByEmail($email) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute(array($email));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function checkUser ($usuario) {
        $query = $this->db->prepare('SELECT FROM usuarios WHERE username=?');
        $query->execute([$usuario]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function checkEmail ($email) {
        $query = $this->db->prepare('SELECT FROM usuarios WHERE email=?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function newUser ($user, $email,$password){
        $query = $this->db->prepare('INSERT  INTO usuarios(username, email, contrasenia, admin) VALUES(?,?,?,0)');
        $query->execute([$user,$email,$password]); 
    }
    public function modificarPermiso($usuario, $newRol){
        $query = $this->db->prepare('UPDATE usuarios SET admin=? WHERE id_usuario =?');
        $query->execute([$newRol,$usuario]);
    }
    public function eliminarUsuario($id){
        $query = $this->db->prepare('DELETE FROM usuarios WHERE id_usuario=?');
        $query->execute([$id]); 
    }
    public function newPassword($password,$id_usuario){
        $query= $this->db->prepare('UPDATE usuarios SET contrasenia=? WHERE id_usuario=?');
        $query->execute([$password,$id_usuario]);
    }
}