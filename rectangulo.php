<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miguel Angel Odrillas Mamani</title>
</head>
<body>
    <?php
    $numero=5;
    //$numero=4;
    $doble=$numero*2;
    $triple=$doble*3;
    if($numero%2==0){
        $mitad=$numero/2;
        for($i=1;$i<=$mitad;$i++){
            for($j=1;$j<=$triple;$j++){
                echo "*";
            }
            echo "<br>";
        }
        $fin=$triple-$mitad;
        for($i=1;$i<=$numero;$i++){
            for($j=1;$j<=$triple;$j++){
                if($j<=$mitad){
                    echo "*";
                }
                else{
                    if($j>$fin){
                        echo "*";
                    }
                    else{
                        echo  " &nbsp;";
                    }
                }
            }
            echo "<br>";
        }
        for($i=1;$i<=$mitad;$i++){
            for($j=1;$j<=$triple;$j++){
                echo "*";
            }
            echo "<br>";
        }
    }
    else{
        $mitad=$numero/2;
        $mitad2=($numero/2)+1;
        for($i=1;$i<=$mitad;$i++){
            for($j=1;$j<=$triple;$j++){
                echo "*";
            }
            echo "<br>";
        }
        $fin2=$triple-$mitad2;
        for($i=1;$i<=$numero;$i++){
            for($j=1;$j<=$triple;$j++){
                if($j<=$mitad){
                    echo "*";
                }
                else{
                    if($j>=$fin2){
                        echo "*";
                    }
                    else{
                        echo  " &nbsp;";
                    }
                }
            }
            echo "<br>";
        }
        for($i=1;$i<=$mitad2;$i++){
            for($j=1;$j<=$triple;$j++){
                echo "*";
            }
            echo "<br>";
        }
    }

    ?>
</body>
</html>