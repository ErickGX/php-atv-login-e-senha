<?php

//configurações gerais da conexao
$servidor="localhost";
$usuario="root";
$senha="";
$banco="bdatividade";

// Create connection
$conexao = new mysqli($servidor,$usuario,$senha,$banco);
// Check connection
if($conexao->connect_errno){
    echo "Erro ao conectar ao banco de dados: (" .$conexao->connect_errno . ") " . $conexao->connect_error; 

}else{
    echo "conexao  bem sucessida";
    
}


//sem orientacao ao objeto
//$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
// if (mysqli_connect_errno()) {

//     echo "Erro ao conectar com a base de dados: ".mysqli_connect_error();

// } else {

// }

?>