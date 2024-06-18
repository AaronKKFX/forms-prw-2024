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


$estado =$_POST["estado"];

echo"<h3>ESTADO:</h3><br>";
echo $estado."<br>";
echo"<h3>CAPITAL:</h3><b3>";
if($estado ==1)
{
    echo"Rio Branco<br>";
}
elseif($estado==2)
{
    echo"Maceio<br>";
}
elseif($estado==3)
{
    echo"Macapá<br>";
}
elseif($estado==4)
{
    echo"Manaus<br>";
}
elseif($estado==5)
{
    echo"Salvador<br>";
}
elseif($estado==6)
{
    echo"Fortaleza<br>";
}
elseif($estado==7)
{
    echo"Brasília<br>";
}
elseif($estado=8)
{
    echo"Vitória<br>";
}
elseif($estado==9)
{
    echo"Goiânia<br>";
}
elseif($estado==10)
{
    echo"São Luís<br>";
}
elseif($estado==11)
{
    echo"Cuiabá<br>";
}
elseif($estado==12)
{
    echo"Campo Grande<br>";
}
elseif($estado==13)
{
    echo"Belo Horizonte<br>";
}
elseif($estado==14)
{
    echo"Belém<br>";
}
elseif($estado==15)
{
    echo"João Pessoa<br>";
}
elseif($estado==16)
{
    echo"Curitiba<br>";
}
elseif($estado==17)
{
    echo"Recife<br>";
}
elseif($estado==18)
{
    echo"Teresina<br>";
}
elseif($estado==19)
{
    echo"Rio de Janeiro<br>";
}
elseif($estado==20)
{
    echo"Natal<br>";
}
elseif($estado==21)
{
    echo"Porto Alegre<br>";
}
elseif($estado==22)
{
    echo"Porto Velho<br>";
}
elseif($estado==23)
{
    echo"Boa Vista<br>";
}
elseif($estado==24)
{
    echo"Florianopolis<br>";
}
elseif($estado==24)
{
    echo"São Paulo<br>";
}
elseif($estado==25)
{
    echo"Aracaju<br>";
}
elseif($estado==26)
{
    echo"São Paulo<br>";
}
elseif($estado==27)
{
    echo"Palmas<br>";
}
else{
    echo"Selecione um estado<br>";
}

?>
</body>
</html>