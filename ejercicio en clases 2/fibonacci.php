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
        $numero=8;
        $fibo[0]=1;
        $fibo[1]=1;
        for($i=2;$i<=$numero;$i++){
            $fibo[$i]=$fibo[$i-1]+$fibo[$i-2];
        }
        for($i=0;$i<=$numero;$i++){
            echo $fibo[$i]. "     ".$i."     "."<br>";
        }
       
    ?>
</body>
</html>