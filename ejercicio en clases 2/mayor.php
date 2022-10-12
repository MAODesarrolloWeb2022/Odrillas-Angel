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
    $num1=7;
    $num2=15;
    $num3=8;
    if($num1>$num2){
        if($num1>$num3){
            echo "el mayor es: ".$num1;
        }
        else{
            echo "el mayor es: ".$num3;
        }
    }
    else{
        if($num2>$num3){
            echo "el mayor es: ".$num2;
        }
        else{
            echo "el mayor es: ".$num3;
        }
    }
    ?>
</body>
</html>