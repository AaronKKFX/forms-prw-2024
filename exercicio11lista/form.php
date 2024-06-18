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

$p = $_POST["p"];
$nome = $_POST["nome"];
$i = $_POST["i"];
$per = $_POST["per"];
$m = $_POST["m"];


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

if (strlen($nome)==0 or strlen($p)==0)
{
    
}
//VERIFICA SE NÃO HOUVE ERRO
if($erro==0)
{ echo 'Todos os dados foram digitados corretamente!<br>';}
?>
</body>
</html>