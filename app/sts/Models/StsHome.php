<?php

namespace Sts\Models;

if(!defined("C7E3L8K9E5")){
    //header("Location: /");
    die("Erro: Página não encontrada!");
 }

class StsHome
{
    private array $data;
    private object $connection;

    public function index():array
    {
      
        $viewHome = new \Sts\Models\helper\StsRead();
        $viewHome->exeRead("sts_homes_tops", "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data = $viewHome->getResult();

        var_dump($this->data);

        return $this->data;
    }
}