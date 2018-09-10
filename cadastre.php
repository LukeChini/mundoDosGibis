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

    <p class="flutuar"><a href="login.php"> Voltar </a></p>

    </div>
    <div class="cadastre">
      <form action="salvando_usuarios.php" method="post">


<fieldset>
 <div class="tituloCadastro">
 <legend>Dados Pessoais</legend>
 </div>

 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="nome" placeholder="Ex: Peter">
   </td>
  </tr>
   <tr>
   <td>
    <label for="sobrenome">Sobrenome: </label>
   </td>
   <td align="left">
    <input type="text" name="sobrenome" placeholder="Ex: Parker">
   </td>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
    <input type="date" name="aniversario" max="2214-04-30" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" >
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="13" placeholder="Ex: 11.222.333-4">
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="11" maxlength="11" placeholder="Ex: 111.222.333.44"></inut>
   </td>
  </tr>

  <tr>
   <td>
    <label>Sexo:</label>
   </td>
   <td align="left">
    <div class="sexoRadio">
    <input type="radio" name="sexo" value="masculino" class="sexoRadio">Masculino</inut>
    <input type="radio" name="sexo" value="feminino" class="sexoRadio" >Feminino</inut>
  </div>
   </td>
  </tr>


 </table>
</fieldset>


<br />
<!-- ENDEREÇO -->
<fieldset>
<div class="tituloCadastro">
 <legend>Dados de Endereço</legend>
</div>
 <table cellspacing="10">

  <tr>
   <td>
    <label for="rua">Rua:</label>
   </td>
   <td align="left">
    <input type="text" name="rua" placeholder="Ex: Rua Ingram">
   </td>
 </tr>
   <tr>
   <td>
    <label for="numero">Numero:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="4" placeholder="Ex: 20">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro" placeholder="Ex: Queens">
   </td>
  </tr>
  <td>
   <label for="cidade">Cidade: </label>
  </td>
  <td align="left">
   <input type="text" name="cidade" placeholder="Ex: Nova York">
  </td>
 </tr>
  <tr>
   <td>
    <label for="estado">Estado:</label>
   </td>
   <td align="left">
    <select name="estado">
    <option value="ac">Acre</option>
    <option value="al">Alagoas</option>
    <option value="am">Amazonas</option>
    <option value="ap">Amapá</option>
    <option value="ba">Bahia</option>
    <option value="ce">Ceará</option>
    <option value="df">Distrito Federal</option>
    <option value="es">Espírito Santo</option>
    <option value="go">Goiás</option>
    <option value="ma">Maranhão</option>
    <option value="mt">Mato Grosso</option>
    <option value="ms">Mato Grosso do Sul</option>
    <option value="mg">Minas Gerais</option>
    <option value="pa">Pará</option>
    <option value="pb">Paraíba</option>
    <option value="pr">Paraná</option>
    <option value="pe">Pernambuco</option>
    <option value="pi">Piauí</option>
    <option value="rj">Rio de Janeiro</option>
    <option value="rn">Rio Grande do Norte</option>
    <option value="ro">Rondônia</option>
    <option value="rs">Rio Grande do Sul</option>
    <option value="rr">Roraima</option>
    <option value="sc">Santa Catarina</option>
    <option value="se">Sergipe</option>
    <option value="sp">São Paulo</option>
    <option value="to">Tocantins</option>
   </select>
   </td>
  </tr>
  <tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="cep" size="8" maxlength="8" placeholder="Ex: 03333-444"></input>
   </td>
  </tr>
 </table>
</fieldset>
<br />

<!-- DADOS DE LOGIN -->
<fieldset>
<div class="tituloCadastro">
 <legend>Dados de login</legend>
</div>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="email" name="email" placeholder="Ex: pp@gmail.com">
   </td>
  </tr>
  <tr>
   <td>
    <label for="imagem">Imagem de perfil:</label>
   </td>
   <td>
    <input type="file" name="imagem" >

   </td>
  </tr>
  <tr>
   <td>
    <label for="login">Login de usuário: </label>
   </td>
   <td align="left">
    <input type="text" name="login" placeholder="Ex: SpiderMan">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="pass">
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" name="passconfirm">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<div class="continuarlogin">
<input type="submit" name="enviar" value="Enviar">
</div>
</form>


<?php
session_start();
if (isset($_POST['enviar'])){
  $nome = $_POST["nome"];
  $_SESSION['nome'] = $nome;

  $sobrenome = $_POST["sobrenome"];
  $_SESSION['sobrenome'] = $sobrenome;

  $aniversario = $_POST["aniversario"];
  $_SESSION['aniversario'] = $aniversario;

  $rg = $_POST["rg"];
  $_SESSION['rg'] = $rg;

  $cpf = $_POST["cpf"];
  $_SESSION['cpf'] = $cpf;

  $sexo = $_POST["sexo"];
  $_SESSION['sexo'] = $sexo;

  $rua = $_POST["rua"];
  $_SESSION['rua'] = $rua;

  $numero = $_POST["numero"];
  $_SESSION['numero'] = $numero;

  $bairro = $_POST["bairro"];
  $_SESSION['bairro'] = $bairro;

  $cidade = $_POST["cidade"];
  $_SESSION['cidade'] = $cidade;

  $estado = $_POST["estado"];
  $_SESSION['estado'] = $estado;

  $cep = $_POST["cep"];
  $_SESSION['cep'] = $cep;


  $email = $_POST["email"];
  $_SESSION['email'] = $email;

  $imagem = $_POST["imagem"];
  $_SESSION['imagem'] = $imagem;

  $login = $_POST["login"];
  $_SESSION['login'] = $login;

  $pass = $_POST["pass"];
  $_SESSION['pass'] = $pass;

  $passconfirm = $_POST["passconfirm"];
  $_SESSION['passconfirm'] = $passconfirm;

  echo "<br>";
  echo $_POST["nome"];
  echo "<br>";
  echo $_POST["sobrenome"];
  echo "<br>";
  echo password_hash($_POST["senha"],PASSWORD_DEFAULT);


}
?>




</div>
  </body>
</html>
