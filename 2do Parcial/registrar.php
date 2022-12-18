<?php
include("conexion.php");

$titulo = $_POST["Titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["ideditorial"];
$anio = $_POST["anio"];
$usuario = $_POST["idusuario"];
$carrera = $_POST["idcarrera"];
$imagen = $_FILES['imagen']['name'];

if ($imagen != "") {
    $archivo = explode($_FILES['imagen']['name'], ".");
    $extension = end($archivo);
    $imagen = uniqid() . '.' . $extension;
    copy($_FILES['imagen']['tmp_name'], "images/" . $imagen);
}

$sql = "INSERT INTO libros(imagen,titulo,autor,ideditorial,anio,idusuario,idcarrera) 
VALUES('$imagen','$titulo','$autor','$editorial','$anio',$usuario,$carrera)";

if ($con->query($sql) === TRUE) {   
    echo "datos insertados";
} else {
    echo "Error"+ $sql + "<br>" + $con->error;"</script>";
}

$con->close();
?>
