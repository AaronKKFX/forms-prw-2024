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

$nome = $_POST["nome"];
$texto = $_POST["texto"];
$aceito = $_POST["aceito"];
$opc =$_POST["opc"];
$filme =$_POST["filme"];

echo"<h3>Nome:</h3><br>";
if(strlen($nome)==0)
{
    echo "Digite seu nome<br>";
}
else{
    echo $nome."<br>";
}


echo"<h3>Opinião:</h3><br>";
echo $texto."<br>";

echo"<h3>Aceita os Termo:</h3><br>";
if($aceito == 0){
    echo"Não<br>";
}
else{
    echo"SIM<br>";
}

echo"<h3>Avaliação do Filme:</h3><br>";
if($opc==1)
{
    echo"Muito Bom<br>";
}
elseif($opc==2)
{
    echo"Bom<br>";
}
elseif($opc==3)
{
    echo"Mediano<br>";
}
else{
    echo"Ruim<br>";
}

echo"<h3>Filme:</h3><br>";
if($filme ==1)
{
    echo"Divertidamente<br>";
}
elseif($filme ==2)
{
    echo"Carros 2<br>";
}
else{
    echo"Selecione um filme<br>";
}

?>
</body>
</html>