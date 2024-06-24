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

if(strlen($p) ==0)
{
    echo '<h3>Prontuário:</h3>';
    echo '<span style="color:red">Prontuário não pode estar em branco:</span>';

}
else
{
    echo '<h3>Prontuário:</h3>';
    echo $p."<br>";
}
if(strlen($nome) == 0)
{
    echo '<h3>Nome:</h3>';
    echo'<span style="color:red">Nome não pode estar em branco</span>';
}
else
{
    echo '<h3>Nome:</h3>';
    echo $nome."<br>";
}
if($i<= 15 or $i>=75)
{
    echo '<h3>Idade:</h3>';
    echo '<span style="color:red">Idade invalida</span>';
}
else 
{
    echo '<h3>Idade</h3>';
    echo $i."<br>";
}
if(strtoupper($per) =='V')
{
    echo '<h3>Perído:</h3>';
    echo 'Vespertino<br>';
}
elseif(strtoupper($per) =='N')
{
    echo '<h3>Perído:</h3>';
    echo 'Noturno<br>';
}
else
{
    '<h3>Perído:</h3>';
    echo'<span style="color:red">Escolha um período valido!!(V ou N)</span><br>';
}
if($m <1 && $m >4)
{
    echo '<h3>Módulo:</h3>';
    echo'<span style="color:red">Digite um Módulo Valido</span>';
}
else
{
    echo '<h3>Módulo:</h3>';
    echo $m."<br>";
}
?>
</body>
</html>