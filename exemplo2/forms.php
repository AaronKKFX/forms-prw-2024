<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$username = $_POST["username"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$erro=0;

echo '<h3>Username:</h3>';
echo $username;

echo '<h3>Senha:</h3>';
echo $senha;

echo '<h3>Nome:</h3>';
echo $nome;

echo '<h3>Email:</h3>';
echo $email;

echo '<h3>Cidade:</h3>';
echo $cidade;

echo '<h3>Estado:</h3>';
echo $estado.'<br><br>';

if(strlen($username)<5)
{ echo 'O username deve possuir no mínimo 5 caracteres.<br>'; $erro=1;}
if(strlen($senha)<5)
{ echo 'A senha deve possuir no mínimo 5 caracteres.<br>'; $erro=1;}
if(empty($cidade))
{ echo 'Favor digitar sua cidade<br>'; $erro=1;}
if(strlen($estado)!=2)
{ echo 'Favor digitar seu estado corretamente<br>'; $erro=1;}
//VERIFICA SE NÃO HOUVE ERRO
if($erro==0)
{ echo 'Todos os dados foram digitados corretamente!<br>';}
?>
</body>
</html>