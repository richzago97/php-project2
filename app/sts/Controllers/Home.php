<?php

namespace Sts\Controllers;

if(!defined("C7E3L8K9E5")){
    //header("Location: /");
    die("Erro: Página não encontrada!");
 }

class Home
{
    /**
     * @var array $data Recebe os dados que devem ser enviados para VIEW
    */
    private array|string|null $data;

    /**
     * Instanciar a classe responsável em carregar a View
     * @return void
     */

    public function index()
    {
        $home = new \Sts\Models\StsHome();
        $this->data = $home->index();

        $loadView = new \Core\ConfigView("sts/Views/home/home", $this->data);
        $loadView->loadView();
    }
}