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
    $f =$_POST['frequencia'];

    $nf= ($n1+$n2)/2;

    if($nf < 5)
    {
        echo "<span style='color:red'><h3>Reprova por nota:</h3><spam><br>";
        echo$nf;
    }
    elseif($f<75)
    {
        echo "<span style='color:red'><h3>Reprova por frequencia:</h3><spam><br>";
        
    }
    elseif($nf >=5 and $f>=75)
    {
        echo "<h3>Aprovado:</h3><br>";
    }
    

    ?>
</body>
</html>