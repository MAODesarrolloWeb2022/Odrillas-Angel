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
        $nalumnos=$_POST['nalumnos'];
        if($nalumnos<=0){
            header("location:introduccion.html");
            die("ingresar un numero mayor a cero"); 
        }
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
            <?php for($i=1;$i<=$nalumnos;$i++) { ?>
                <tr>
                    <td><?php echo $i; ?> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="radio" name="sexo" value="M">Masculino
                        <input type="radio" name="sexo" value="F">Femenino     
                    </td>
                    <td>
                    <select name="codigocarrera" id="codigocarrera">
                    <?php
                   $sql = "SELECT * FROM carreras";
                   $resultado = $con->query($sql); 
                   while ($row = $resultado->fetch_assoc()){ ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['codigocarrera']; ?></option>
                        <?php  }  ?>
                        </select>
                    </td>
                </tr>
            <?php }?>
        </table>
</body>

</html>