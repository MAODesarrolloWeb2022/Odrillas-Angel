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
    include("conexion.php");
    $sql = "SELECT *FROM libros";
    $resultado = $con->query($sql);
    $i=1;
    if ($resultado->num_rows > 0) {
    ?>
    <table>
        <tr>
            <th>imagen</th>
            <th>Titulo</th>
            <th>autor</th>
            <th>editorial</th>
            <th>anio</th>
            <th>usuario</th>
            <th>carrera</th>
        </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td> <img src="images/<?php echo $row["imagen"]; ?>" alt=""></td>
                    <td><?php echo $row["titulo"]; ?></td>
                    <td><?php echo $row["autor"]; ?></td>
                    <td><?php echo $row["ideditorial"]; ?></td>
                    <td><?php echo $row["anio"]; ?></td>
                    <td><?php echo $row["idusuario"]; ?></td>
                    <td><?php echo $row["idcarrera"]; ?></td>
                </tr>
            <?php  } ?>
        </table>
    <?php

        } else {
            echo "No tiene libros";
        }?>
</body>
</html>