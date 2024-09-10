<?php

require_once 'models/public.model.php';
require_once 'views/public.view.php';

class PublicController
{
    private $modelPublic;
    private $viewPublic;

    public function __construct()
    {
        $this->modelPublic = new PublicModel();
        $this->viewPublic = new PublicView();
    }

    public function home()
    {
        $this->viewPublic->showHome();
    }

    //funcion que muestra todas las noticias de la db
    public function showNoticias()
    {
        //le pido las noticias al modelo
        $noticias = $this->modelPublic->getAll();

        //actualizo la vista
        $this->viewPublic->showNoticias($noticias);
    }

    //funcion que muestra una sola noticia
    public function showNoticia($id_noticia)
    {
        //le pido la noticia por id
        $noticia = $this->modelPublic->get($id_noticia);

        if (!empty($id_noticia)) { //si la encuestra la muestra
            $this->viewPublic->showNoticia($noticia);
        } else //sino muestra error
            $this->viewPublic->showError("error");
    }

    //funcion que muestra todos los desarrolladores de la db
    public function showDevelopers(){
        //le pido las noticias al modelo
        $developers = $this->modelPublic->getAllDevelopers();

        //actializo la vista
        $this->viewPublic->showDevelopers($developers);
    }

    //funcion que muestra un solo desarrollados
    public function showDeveloper($id_developer){
        //le pido la noticia por id
        $developers = $this->modelPublic->getDeveloper($id_developer);

        if (!empty($id_developer)) { //si la encuestra la muestra
            $this->viewPublic->showDeveloper($developers);
        } else //sino muestra error
            $this->viewPublic->showError("error");
    }

    //muestra un error en la pantalla
    public function showError($msg)
    {
        $this->viewPublic->showError($msg);
    }
}
