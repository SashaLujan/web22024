<?php
class PublicModel{
    private function createConection(){
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'noticias';
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    //muestra todas las noticias
    public function getAll(){
        //abro la conexion con mysql
        $db = $this->createConection();
        //enviamos la consulta
        $sentencia = $db->prepare("SELECT * FROM noticia"); //prepara la consulta
        $sentencia->execute();
        $noticia =$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $noticia;
    }

    //muestra una sola noticia
    public function get($id_noticia){
        //abro la conexion con mysql
        $db = $this->createConection();
        //enviamos la consulta
        $sentencia = $db->prepare("SELECT * FROM noticia WHERE id_noticia= $id_noticia");
        $sentencia->execute();
        $noticia = $sentencia->fetch(PDO::FETCH_OBJ);
        return $noticia;
    }

    //muestra todos los desarrolladores
    public function getAllDevelopers(){
        //abro la conexion con mysql
        $db = $this->createConection();
        //enviamos la consulta
        $sentencia = $db->prepare("SELECT * FROM developers");
        $sentencia->execute();
        $developers = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $developers;
    }

    //muestro un solo desarrollador
    public function getDeveloper($id_developer){
        //abro la conexion con mysql
        $db = $this->createConection();
        //enviamos la consulta
        $sentencia = $db->prepare("SELECT * FROM developers WHERE id_developer=?");
        $sentencia->execute([$id_developer]);
        $developers = $sentencia->fetch(PDO::FETCH_OBJ);
        return $developers;
    }
}