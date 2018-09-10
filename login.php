<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MundodosGibis</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
	  <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="principal">

    <div class="superior">
    <header class="main-header">
        <!-- <img src="images/37677743_10214099978787839_5201104562508791808_n.png" alt="logotipo" class="logo"> <a href="#" class="toggle-nav"> <span class="ion-navicon-round"></span> </a> -->
        <h1 class="logoescrito"> MundodosGibis.com <h1>
    </div>

    <div class="caixadepesquisa">

    <input class="cinquenta" type="text" name="caixadepesquisa" placeholder="O que você procura?">


    <p class="flutuar"><a href="index.php"> Home </a></p>

    </div>
  </header>

  <div class="login">
    <form class="" action="loginOn.php" method="post">

    <p> email </p>
    <input type="email" name="emailLogin" placeholder="Ex: joaodasilva@gmail.com"></input>
    <p> senha </p>
    <input type="password" name="passwordLogin" ></input>
    <div class="continuarlogin">
    <input  type="submit" name="continuarlogin" value="Continuar" ></input>
    </div>
</form>

    <div class="crieuma">
          <p>Não tem uma conta? <a href="cadastre.php"> Crie uma! </a></p>
    </div>




  </div>



  <?php

    session_start();

    if (isset($_POST['continuarlogin']) && $usuario == $_POST["emailLogin"] && $senha == $_POST["passwordLogin"]  ){
      echo "Você acertou seu USUARIO e SENHA";
    }
    else {
      echo "USUARIO ou SENHA INCORRETOS";

    }
    ?>
