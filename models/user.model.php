<?php

class UserModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=escuela;charset=utf8', 'root', '');
    }

    public function getByEmail($email) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute(array($email));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function checkUser ($usuario) {
        $query = $this->db->prepare('SELECT FROM usuarios WHERE username=?');
        $query->execute([$usuario]);
        return $query->fetch(PDO::FECTCH_OBJ);
    }
    public function checkEmail ($email) {
        $query = $this->db->prepare('SELECT FROM usuarios WHERE email=?');
        $query->execute([$email]);
        return $query->fetch(PDO::FECTCH_OBJ);
    }
    public function newUser ($user, $email,$password){
        $query = $this->db->prepare('INSERT  INTO usuarios(username, email, contrasenia, admin) VALUES(?,?,?,0)');
        $query->execute([$user,$email,$password]); 
    }
}