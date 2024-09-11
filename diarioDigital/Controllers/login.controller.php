<?php

require_once 'models/login.model.php';
require_once 'views/public.view.php';

class LoginController
{
    private $modelLogin;
    private $viewPublic;

    public function __construct()
    {
        $this->modelLogin = new LoginModel();
        $this->viewPublic = new PublicView();
    }

    //agrega un suscriptor
    public function addUser()
    {
        if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['contraseña']) || empty($_POST['confirmarContraseña'])) {
            $this->viewPublic->formCheck("Todos los datos son obligatorios");
        } else {
            $nombre = $_POST['nombre'];
            $username = $_POST['email'];
            $password = $_POST['contraseña'];
            $repitPassword = $_POST['confirmarContraseña'];
            
            $user = $this->modelLogin->getAdmin($username);
            if ($user) {
                $this->viewPublic->formCheck("El usuario ya esta registrado");
            } else {
                if ($password != $repitPassword) {
                    $this->viewPublic->formCheck("Las contraseñas no coinciden");
                } else {
                    $passwordCifrado = password_hash($password, PASSWORD_DEFAULT);
                    $this->modelLogin->insert($nombre, $username, $passwordCifrado);
                    $user = $this->modelLogin->getAdmin($username);
                    if (session_status() != PHP_SESSION_ACTIVE) {
                        session_start(); //Abro la sesion
                    }
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['email'] = $username;  //Guardo el nombre de usuario
                    $_SESSION['ID'] = $user->id_usuario;
                    header('Location: ' . BASE_URL . 'home');
                }
            }
        }
    }

    //verifica que tipo de usuario es
    public function formCheckIn()
    {
        $this->viewPublic->formCheck();
    }
}
