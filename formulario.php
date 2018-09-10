<?php
session_start();

  echo $_POST["nome"];
  echo "<br>";
  echo $_POST["sobrenome"];
  echo "<br>";
  echo $_POST["aniversario"];
  echo "<br>";
  echo $_POST["rg"];
  echo "<br>";
  echo $_POST["cpf"];
  echo "<br>";
  echo $_POST["sexo"];
  echo "<br>";


  echo $_POST["rua"];
  echo "<br>";
  echo $_POST["numero"];
  echo "<br>";
  echo $_POST["bairro"];
  echo "<br>";
  echo $_POST["cidade"];
  echo "<br>";
  echo $_POST["estado"];
  echo "<br>";
  echo $_POST["cep"];
  echo "<br>";


  echo $_POST["email"];
  echo "<br>";
  echo $_POST["imagem"];
  echo "<br>";
  echo $_POST["login"];
  echo "<br>";
  echo password_hash($_POST["pass"],PASSWORD_DEFAULT);
  echo "<br>";
  echo password_hash($_POST["passconfirm"],PASSWORD_DEFAULT);
  echo "<br>";
  if ($_POST["pass"] === $_POST["passconfirm"] ){
    echo 'Cadastro Realizado com Sucesso!';
  } else {
    echo 'Confirmação de senha não confere';
  }

echo '<br />';
echo date('d/m/Y');
echo '<br />';

$niver = $_POST["aniversario"];
$hoje = date('Y/m/d');

$anoniver = substr ( $niver , 0 , 4 );
$mesniver = substr ( $niver , 5 , 2 );
$dianiver = substr ( $niver , 8 , 2 );

$anoHoje = substr ( $hoje , 0 , 4 );
$mesHoje = substr ( $hoje , 5 , 2 );
$diaHoje = substr ( $hoje , 8 , 2 );

echo $anoniver;
echo "<br>";
echo $mesniver;
echo "<br>";
echo $dianiver;
echo "<br>";
$idadem = ($anoHoje - $anoniver);
echo $idadem;
echo "<br>";


function idade()
{

  $niver = $_POST["aniversario"];
  $hoje = date('Y/m/d');

  $anoniver = substr ( $niver , 0 , 4 );
  $mesniver = substr ( $niver , 5 , 2 );
  $dianiver = substr ( $niver , 8 , 2 );

  $anoHoje = substr ( $hoje , 0 , 4 );
  $mesHoje = substr ( $hoje , 5 , 2 );
  $diaHoje = substr ( $hoje , 8 , 2 );



  if($mesniver>$mesHoje || $mesniver===$mesHoje && $dianiver>$diaHoje)
  {
    return $anoHoje - $anoniver -1;
  }
  else
  {
    return $anoHoje - $anoniver;
  }
}

echo idade();







?>
