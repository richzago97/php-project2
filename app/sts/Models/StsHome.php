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
        $this->data = [
            "title" => "Topo da pagina",
            "description" => "Descrição do serviço"
        ];

        $connection = new \Sts\Models\helper\StsConn();
        $this->connection = $connection->connectDb();

        var_dump($this->connection);

        return $this->data;
    }
}