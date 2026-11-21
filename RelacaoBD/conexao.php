<?php 
$conexao = mysqli_connect("localhost:3306", "root", "", "agenda");

if(!$conexao){
  die("Erro ao conectar com o banco de dados: " +mysqli_connect_error());
  }else{
    echo "CONECTADO!!!";
  }

?>
