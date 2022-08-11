<?php
 include('conexaobd.php');
 
  $cpf = $_POST['CPF'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];   

  echo "$cpf";
  echo "$nome";
  echo "$email";
  echo "$senha";


 $sql = "INSERT INTO usuarios (CPF,nome,senha,email) 
 VALUES ($cpf,'$nome','$senha','$email')";


 if(mysqli_query($conexao, $sql))///Ta errado
 

 if(mysqli_insert_id($conexao)){
    header("Location: index.html");
 }else{
       echo "Falha na inserção";
 }
    mysqli_close($conexao);
    

?>   

