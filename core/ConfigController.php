<?php

namespace Core;

class ConfigController
{
    private string $url;

    public function __construct()
    {
        echo "Carregar a pagina <br>";
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            var_dump($this->url);
        }else{
            echo "Acessa a página inicial <br>";
        }
    }
}