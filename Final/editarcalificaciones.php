<?php include("conexion.php");
$materia=$_GET['materia'];
$sql="SELECT * FROM alumnos WHERE materia='$materia'";
$consulta=$con->query($sql);
?>
<table table BORDER="10" CELLPADDING="0" CELLSPACING=0 >
    <tr bgcolor="#007C9B">
        <th>Nro </th>
        <th>Nombres y Apellidos</th>
        <th>Calificacion</th>
    </tr>
    <?php
    while ($fila = $consulta->fetch_assoc()) {
    ?>
    <tr>
        <td id="id"><?php echo $fila['id'];?></td>
        <td><?php echo $fila['nombres_apellidos']; ?> </td>
        <td><input type="number" value="<?php echo $fila['calificacion']; ?>" id="nota" name="nota" onclick="calificar()"></td>
    </tr>
    <?php } ?>
</table>
<script src="java.js"></script>