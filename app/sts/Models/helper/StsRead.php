<?php

namespace Sts\Models\helper;

if(!defined("C7E3L8K9E5")){
    //header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;
use PDOException;

class StsRead extends StsConn
{
    private string $select;
    private array|null $result = [];
    private object $query;
    private object $conn;

    function getResult(): array|null
    {
        return $this->result;
    }

    public function exeRead(string $table, $terms = null, $parseString = null)
    {
        $this->select = "SELECT * FROM {$table}";

        $this->exeInstruction();
    }

    private function exeInstruction()
    {
        $this->connection();
        try {
            $this->query->execute();
            $this->result = $this->query->fetchAll();
        } catch (PDOException $err) {
           $this->result = null;
        }
    }

    private function connection()
    {
        $this->conn = $this->connectDb();
        $this->query = $this->conn->prepare($this->select);
        $this->query->setFetchMode(PDO::FETCH_ASSOC);
    }
}