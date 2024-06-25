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
    $nome =$_POST['nome'];
    $hora =$_POST['hora'];
    
    if(strtotime($hora) <strtotime("12:00"))
    {
     echo "Bom dia $nome<br>";  
      
    }
    else if(strtotime($hora) >strtotime("18:00"))
    {
        echo"Boa noite $nome";
    }
    else
    {
        echo"Boa Tarde $nome<br>";
    }
    ?>
</body>
</html>