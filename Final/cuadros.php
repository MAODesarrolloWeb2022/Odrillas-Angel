<?php include('conexion.php');
$numero=$_GET['numero'];
?>
<table BORDER="5" CELLPADDING=2 CELLSPACING=0>
    <tr>
        <td>imagen</td>
        <td>Nombres y Apellidos</td>
        <?php for($i=1;$i<=$numero;$i++) { ?>
        <td>
            Cuadro <?php echo $i ?>
        </td>
    <?php } ?>
    </tr>
    <?php 
    $sql="SELECT * FROM `alumnos`";
    $consulta = $con->query($sql);
    $filas=$consulta->num_rows;
    
    while ($row = $consulta->fetch_assoc()) {
        ?>
            <tr>
                <td>&nbsp;</td>
                <td><?php echo $row["nombres_apellidos"]; ?></td>
            <?php for($i=1;$i<=$numero;$i++) { ?>
            <td>&nbsp;</td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>