<?php
class LoginModel{
    private function createConection(){
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'noticias';
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public function getAdmin($username){
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM usuarios WHERE email = ?"); // prepara la consulta
        $sentencia->execute([$username]); // ejecuta
        $administrador = $sentencia->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        return $administrador;
    }

    //inserta un usuario nuevo
    public function insert($nombre,$username,$contraseña){
         // 1. abro la conexión con MySQL
         $db = $this->createConection();
         // 2. enviamos la consulta (3 pasos)
         $sentencia = $db->prepare("INSERT INTO usuaios (nombre, email, contraseña) VALUES (?,?,?)");// prepara la consulta
         return $sentencia->execute([$nombre, $username, $contraseña]);
    }
}