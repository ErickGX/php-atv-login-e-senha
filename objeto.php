<?php


//insere a classe
    include_once('produto.php');

//cria um objeto 
    $valor =new Produto();

//atribuir um valor
    $valor->codigo = 6666;
    
    $valor->descricao = "THE BEST SONG OF ROCINHA ALL TIME"; 
    
    $valor->preco = 50.20;

    $valor->quantidade = 120;

//imprimindo os valores inseridos

echo $valor->codigo ." - ".$valor->descricao." - ".$valor->preco." - ".$valor->quantidade;

?>