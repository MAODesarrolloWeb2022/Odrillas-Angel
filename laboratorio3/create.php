<?php include('verificar.php'); 
include('permiso.php'); 

include('conexion.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$cu=$_POST['cu'];
$sexo=$_POST['sexo'];
$codigocarrera=$_POST['codigocarrera'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$sql="INSERT INTO usuarios (nombres,apellidos,cu,codigocarrera,usuario,password) VALUES ('$nombres','$apellidos',$cu,'$codigocarrera','$usuario','$password)";
$resultado = $con->query($sql);
if ($con->query($sql) === TRUE) {
    echo "Se inserto con exito";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="4;url=read.php">
