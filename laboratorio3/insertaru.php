<?php include('verificar.php'); 
include('permiso.php'); 
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="create.php" method="POST">
        <div>
            <label for="usuario">usuario</label>
            <input type="text" name="usuario">
        </div>
        <div>
            <label for="password">password</label>
            <input type="text" name="password">
        </div>
        <div>
            <label for="nombres">Nombre</label>
            <input type="text" name="nombres">
        </div>
        <div>
            <label for="apellidos">apellidos</label>
            <input type="text" name="apellidos">
        </div>
        <div>
            <label for="cu">cu</label>
            <input type="text" name="cu">
        </div>
        <div>
            <input type="radio" name="sexo" value="M">Masculino
            <input type="radio" name="sexo" value="F">Femenino            
        </div>
        <div>
            <label for="codigocarrera">codigocarrera</label>
            <select name="codigocarrera" id="codigocarrera">
                <?php
                   $sql = "SELECT * FROM carreras";
                   $resultado = $con->query($sql); 
                   while ($row = $resultado->fetch_assoc()){ ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['codigocarrera']; ?></option>
                  <?php  }  ?>
            </select>
        </div>
        <br>
        <input type="submit" value="registrar">
    </form>
</body>

</html>