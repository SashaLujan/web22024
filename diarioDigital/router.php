<?php
require_once 'controllers/public.controller.php';
require_once 'controllers/login.controller.php';

// definimos la base url de forma dinamica
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

//defino una accion por defecto
if (empty($_GET['action'])) {
    $_GET['action'] = 'home';
}
$accion = $_GET['action'];

$parametros = explode('/', $accion);

switch ($parametros[0]) {
        //accines del public.controller
    case 'home':
        $controller = new PublicController();
        $controller->home();
        break;
    case 'showNoticias':
        $controller = new PublicController();
        $controller->showNoticias();
        break;
    case 'showNoticia':
        $controller = new PublicController();
        $controller->showNoticia($parametros[1]);
        break;
    case 'showDevelopers':
        $controller = new PublicController();
        $controller->showDevelopers();
        break;
    case 'showDeveloper':
        $controller = new PublicController();
        $controller->showDeveloper($parametros[1]);
        break;

    //acciones del ligin controller
    case 'suscribirse':
        $controller = new LoginController();
        $controller->formCheckIn();
         break;
    case 'guardar_usuario':
        $controller = new LoginController();
        $controller->addUser();
        break;

    default:
        $controller = new PublicController();
        $controller->showError("Se ha producido un error, vuelva a intentarlo");
}
