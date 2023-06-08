<?php

    /*
        Constante que define que o usuário está accesando páginas internas
        através da página index.php
    */
    define('C7E3L8K9E5', true);

    require_once './vendor/autoload.php';

    $url = new Core\ConfigController();
    $url->loadPage();
