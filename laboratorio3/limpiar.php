<?php include('verificar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body><?php
        include("conexion.php");
        ?>
        <table BORDER=10 CELLPADDING=2 CELLSPACING=2>
        <tr>
            <th>Nro</th>    
            <th>nombres</th>
            <th>apellidos</th>
            <th>cu</th>
            <th>sexo</th>
            <th>carrera</th>
        </tr>
        </table>
        <meta http-equiv="refresh" content="2; url=introduccion.html" />
</body>

</html>