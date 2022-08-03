<?php

require('conexaobd.php');

?>

<!DOCTYPE html>



<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Usuario</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>


    <h1>Pagina de Login</h1>

    <form action="" method="post">
        CPF : <input type="number" name="usuario" id="" placeholder="digite o usuario">
        Senha : <input type="password" name="senha" id="" placeholder="Digite a senha">


        <br><br>

        <a href="session.php" target="_self>

      <input type=" button" value="Logar">

        </a>

        <br><br>

        <a href="cadastro.php" target="_self">

            <input type="button" value="Cadastrar usuario">

        </a>


    </form>


</body>

</html>