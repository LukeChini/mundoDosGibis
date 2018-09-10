<?php

include ('conect.php');

  $email = $_POST["emailLogin"];
  $senha = $_POST["passwordLogin"];


  $validar = $conn->query("SELECT * FROM usuarios WHERE email = '$email' AND pass = '$senha' ");

  if ($validar->rowCount() == 0)
  {
    echo 'Email ou senha INCORRETOS';
    header("location: login.php");
  }
  else
  {
    $_SESSION['emailLogin'] = $email;
    $_SESSION['passwordLogin'] = $senha;
    header("location: index.php");
  }










  ?>
