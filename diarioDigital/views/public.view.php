<?php

require_once 'libs/Smarty.class.php';

class PublicView{
    public $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
    }
    
    public function showHome($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showHome.tpl');
    }

    public function showError($msg)
    {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/error.tpl');
    }

    //muestra una noticia
    public function showNoticia($noticia)
    {
        $this->smarty->assign('titulo', $noticia->titulo);
        $this->smarty->assign('contenido', $noticia->contenido);
        $this->smarty->assign('imagen', $noticia->imagen);
        $this->smarty->display('templates/showNoticia.tpl');
    }

    //muestra todas las noticias
    public function showNoticias($noticias)
    {
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->display('templates/showNoticias.tpl');
    }

    //muestro todos los desarrolladores
    public function showDevelopers($developers){
        $this->smarty->assign('desarrolladores', $developers);
        $this->smarty->display('templates/showDevelopers.tpl');
    }

    //muestro un solo desarrollador
    public function showDeveloper($developer){
        $this->smarty->assign('nombre', $developer->nombre);
        $this->smarty->assign('email', $developer->email);
        $this->smarty->assign('rol', $developer->rol);
        $this->smarty->display('templates/showDeveloper.tpl');
    }
}