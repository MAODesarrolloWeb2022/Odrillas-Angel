<?php
if ($_SESSION['usuario'] != 'admin') {
    header("location:mensajepermisos.html");
    die("no tiene permisos");
}
?>