<?php

include ('conect.php');

$nome = $_POST['nome'];
$sobrenome = $_POST["sobrenome"];
$aniversario = $_POST["aniversario"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];

$rua = $_POST["rua"];
$numero_rua = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];

$email = $_POST["email"];
$login = $_POST["login"];
$pass = $_POST["pass"];



$stmt = $conn->prepare('INSERT INTO usuarios (nome, sobre_nome, aniversario, rg, cpf, sexo, rua, numero_rua, bairro, cidade, estado, cep, email, login, pass) VALUES (:nome, :sobrenome, :aniversario, :rg, :cpf, :sexo,:rua, :numero, :bairro, :cidade, :estado, :cep,:email, :login, :pass)');

$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':sobrenome', $sobrenome, PDO::PARAM_STR);
$stmt->bindParam(':aniversario', $aniversario, PDO::PARAM_STR);
$stmt->bindParam(':rg', $rg, PDO::PARAM_STR);
$stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
$stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);

$stmt->bindParam(':rua', $rua, PDO::PARAM_STR);
$stmt->bindParam(':numero', $numero_rua, PDO::PARAM_STR);
$stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
$stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
$stmt->bindParam(':estado', $estado, PDO::PARAM_STR);
$stmt->bindParam(':cep', $cep, PDO::PARAM_STR);

$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':login', $login, PDO::PARAM_STR);
$stmt->bindParam(':pass', $pass, PDO::PARAM_STR);


echo $stmt->execute();

 ?>
