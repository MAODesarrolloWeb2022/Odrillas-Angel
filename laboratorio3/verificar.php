<?php session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:mensaje.html");
    die("No estas autorizado");     
}
?>
