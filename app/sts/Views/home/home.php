<?php

if(!defined("C7E3L8K9E5")){
   //header("Location: /");
   die("Erro: Página não encontrada!");
}

echo "<h2> Página Inicial </h2>";

extract($this->data[0]);

echo "ID: $id <br>";
echo "Título: $title_top <br>";
echo "Descrição: $description_top <br>";
echo "Link: $link_btn_top <br>";
echo "Texto: $txt_btn_top <br>";
echo "Imagem: $image <br>";


