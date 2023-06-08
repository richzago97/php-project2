<?php

namespace Core;
/**
 * Configurações básicas do site.
 */

abstract class Config
{
     /**
     * Possui as constantes com as configurações.
     * Configurações de endereço do projeto.
     * Página principal do projeto.
     * Credenciais de acesso ao banco de dados
     * E-mail do administrador.
     * 
     * @return void
     */
    protected function config(): void
    {
        define("URL", "http://localhost/projeto 2/");
        define("URLADM", "http://localhost/projeto 2/adm");

        define("CONTROLLER", "Home");
        define("CONTROLLERERRO", "Erro");

        //Credenciais do banco de dados
        define("HOST", "localhost");
        define("USER", "root");
        define("PASS", "");
        define("DBNAME", "project2");
        define("PORT", 3306);


        define("EMAILADM", "teste@teste.com");
    }
}