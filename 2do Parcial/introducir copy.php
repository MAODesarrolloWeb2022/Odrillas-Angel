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
    $numero=$_POST['numero'];
    for($i=0;$i<$numero;$i++){
        ?> <input type="number" name="num.$i.'">
        <br>
        <?php 
    } ?>
    <input type="hidden" id="n" name="n" value="<?php $numero ?> ">
    <button onclick="location.href='calculo()'">calclular</button>

<script>
    function calculo(){
        var acum=0;
        var i;
    for(i=1;i<=$numeroe;i++){
        acum += parseInt(document.getElementById("num"+i).value);
        console.log(acum);
    }
    document.getElementById("resultado").innerHTML=acum;
    }
</script>
</body>
</html>