<?php
include "conexao.php";

  $nome = "Pedro";
  $tel = "(22) 9966-2586";
  $email = "pedrolima@gmail.com";

  $sql = "insert into contatos(nome, telefone, email) values('$nome', '$tel', '$email')";

  $resultado = mysqli_query($conexao,$sql);
  if($resultado){
    echo "Cadastrado com sucesso!";

  }else{
    echo "Erro ao cadastrar contato!";
  }

  mysqli_close($conexao);
?>