<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" href="../diseno.css">
</head>
<body>
<div class="pregunta4">
        <br>
        <input type="text" value="<?php
    $cadena=$_POST['cadena'];
    if($cadena=="SCRIPT"){
        $muestra="ya tiene la palabra script";
    }
    else{
        $muestra=$cadena;
    }
    echo $muestra;
?>">
    </div>
    <div class="pie4"></div>
</body>
</html>