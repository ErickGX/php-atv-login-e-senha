<?php
require('conexaobd.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

 <?php
 


  $cpf = $_POST['CPF'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];   




  $sql = "INSERT INTO usuario (CPF,nome,email,senha) VALUES ('$cpf','$nome','$email','$testemunho')"; //String com consulta SQL da inserção


 
 
 ?>
       

    <h1>Cadastro de usuario</h1>




    <form action="" method="post">

    <input type="number" name="CPF" id="" placeholder="Insira seu CPF" required>
    <input type="text" name="nome" id="" placeholder=" Insira seu Nome" required>
    <input type="email" name="email" id="" placeholder="Insira seu Email" required>
    <input type="password" name="senha" id="" placeholder="insira sua senha" required>


 <a href="index.html" target="_self">

 <input type="submit" value="Cadastrar">

 </a>   



    </form>
    </body>
</html>