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

    $opc =$_POST['opc'];
    $n1 =$_POST['n1'];
    $n2 =$_POST['n2'];

    if($opc == 1)
    {
        echo "<h3>RESULTADO:</h3><br>";
        echo$n1+$n2;
    }
    elseif($opc ==2)
    {
        echo "<h3>RESULTADO:</h3><br>";
        echo$n1-$n2;
    }
    elseif($opc ==4)
    {
        echo "<h3>RESULTADO:</h3><br>";
        echo$n1*$n2;
    }
    elseif ($opc ==3 and $n2!=0)
    {
        echo "<h3>RESULTADO:</h3><br>";
        echo $n1/$n2;
    }
    elseif($opc ==3 and $n2==0){
        echo "<h3>RESULTADO:</h3><br>";
        echo "Não é possível dividir por zero";
    }

    ?>
</body>
</html>