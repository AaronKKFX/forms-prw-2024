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
$n = $_POST["n"];


for($i=1; $i<=$n; $i++)
{
        echo "<img src='./$p/$i.jpg' style='width: 150px; height:100px'></img><br>";

}

?>
</body>
</html>