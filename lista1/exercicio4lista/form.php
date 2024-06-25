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

    $n1 =$_POST['n1'];
    

    if($n1%4 == 0 and $n1%100 !=0 || $n1%400 ==0)
    {
        echo $n1."<br>é ano bissexto<br>";
    }
    else{
        echo $n1."<br>não é ano bissexto<br>";
    }

    ?>
</body>
</html>