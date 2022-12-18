<?php include('verificar.php'); 
include('permiso.php'); 


include("conexion.php");
$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$cu=$_POST['cu'];
$sexo=$_POST['sexo'];
$codigocarrera=$_POST['codigocarrera'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$sql="UPDATE usuarios SET nombres='$nombres',apellidos='$apellidos',cu=$cu,sexo='$sexo', usuario='$usuario', password='$password WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "Se actualizo el usuario";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3; url=read.php" />