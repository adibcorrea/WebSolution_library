<?php

  $dbHost = 'localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'cadastrar';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  if($conexao->connect_errno){
  echo "erro";} 
  else{
    echo "sucesso";  }

  ?>
