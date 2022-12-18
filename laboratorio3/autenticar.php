<?php  session_start();
include("conexion.php");
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$sql="SELECT id,usuario FROM usuarios WHERE usuario='$usuario' AND password='$password'";
//echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {

    $fila=$resultado->fetch_assoc();
    $_SESSION['usuario']=$usuario;
    header("location:introduccion.html");

}
else
{
    echo "Usuario y/o Contraseña equivocados";
    ?>
    <meta http-equiv="refresh" content="4; url=formlogin.php
    ">
    <?php
}
?>