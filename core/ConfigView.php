<?php

namespace Core;

/**
     * Carregar as páginas da View
*/

class ConfigView
{
    /**
         * Receber o endereço da VIEW e os dados.
         * @param string $nameView Endereço da VIEW que deve ser carregada.
         * @param array|string|null $data Dados que a VIEW deve receber.
    */

    public function __construct(private string $nameView,private array|string|null $data)
    {
    }

    public function loadView(): void
    {
        if(file_exists("app/" . $this->nameView . ".php")){
            include_once "app/sts/Views/include/header.php";
            include_once "app/" . $this->nameView . ".php";
            include_once "app/sts/Views/include/footer.php";
        }else{
            die("Erro: Tente novamente. Caso o problema persista, entre em conato 
            com o administrador " . EMAILADM);
        }
    }
}