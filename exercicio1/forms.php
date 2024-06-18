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

$velocidade = $_POST["velocidade"];
$distancia = $_POST["distancia"];
$consumo = $_POST["consumo"];


echo '<h3>Total Horas::</h3>';
echo $distancia/$velocidade;

echo '<h3>Total Combustível:</h3>';
echo number_format($distancia/$consumo,2,'.','');
?>
</body>
</html>