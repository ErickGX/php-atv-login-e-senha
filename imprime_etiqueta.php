<?php 
    //insere a clase
    include_once 'produto.php';

    //cria dois objetos
    $produto1 = new Produto();
    $produto2 = new Produto();

    //atribuir valores
    $produto1->codigo = 4001;
    $produto1->descricao = 'uga chaka uga uga';

    $produto2->codigo = 4002;
    $produto2->descricao = 'CD - COCKTOPUS';

    //imprime informações de etiqueta
    $produto1->ImprimeEtiqueta();
    $produto2->ImprimeEtiqueta();


?>