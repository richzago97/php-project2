<?php

namespace Sts\Controllers;

if(!defined("C7E3L8K9E5")){
    //header("Location: /");
    die("Erro: Página não encontrada!");
 }

class Contato
{
    private array|string|null $data;

    /**
     * @var array $data Recebe os dados que devem ser enviados para VIEW
    */
 
    /**
     * Instanciar a classe responsável em carregar a View
     * @return void
     */

    public function index()
    {
        $this->data = "Formulário enviado com sucesso! <br>";
        $loadView = new \Core\ConfigView("sts/Views/contato/contato", $this->data);
        $loadView->loadView();
    }
}