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
    $n2 =$_POST['n2'];
    $n3 =$_POST['n3'];

    $nf = ($n1*10) + ($n2*12) + ($n3 *15);

    echo "Valor total das roupas R$: $nf";

    ?>
</body>
</html>