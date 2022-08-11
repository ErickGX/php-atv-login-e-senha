<?php
 require('conexaobd.php');

class Produto {
    var $codigo;
    var $descricao;
    var $preco;
    var $quantidade;
    

    function ImprimeEtiqueta()
    {
        print 'Codigo: '.$this->codigo . "<br/>";
        print 'Descricao: '.$this->descricao . "<br/>";
    }
}

?>