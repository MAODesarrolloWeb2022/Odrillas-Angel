<?php include('conexion.php');
$materia=$_GET['materia'];
$sql="SELECT * FROM horarios WHERE materia='$materia'";
$consulta = $con->query($sql);
?>
<table table BORDER="1" CELLPADDING="0" CELLSPACING=0>
    <tr bgcolor="#3f90a4">
        <th>hora</th>
        <th>lunes</th>
        <th>martes</th>
        <th>miercoles</th>
        <th>jueves</th>
        <th>viernes</th>
    </tr>
    <?php for ($i=8;$i<=17;$i++){ ?>
    <tr>
        <td>
            <?php echo $i.'-'.$i+1 ?>
        </td>
        <?php 
            $sql1="SELECT * FROM horarios WHERE materia='$materia' AND hora='$i' AND dia='Lunes'";
            $resultado = $con->query($sql1);
            $filas1=$resultado->fetch_assoc();
            if($filas1>0){
        ?>
        <td bgcolor="yellow">&nbsp;</td>
        <?php } else { ?>
        <td>&nbsp;</td>
        <?php
            }
                $sql1="SELECT * FROM horarios WHERE materia='$materia' AND hora='$i' AND dia='Martes'";
                $resultado =$con->query($sql1);
                $filas1=$resultado->fetch_assoc();
                if($filas1>0){
        ?>
        <td bgcolor="yellow">&nbsp;</td>
        <?php } else { ?>
        <td>&nbsp;</td>
        <?php
            }
            $sql1="SELECT * FROM horarios WHERE materia='$materia' AND hora='$i' AND dia='Miercoles'";
            $resultado =$con->query($sql1);
            $filas1=$resultado->fetch_assoc();
            if($filas1>0){
        ?>
        <td bgcolor="yellow">&nbsp;</td>
        <?php } else { ?>
        <td>&nbsp;</td>
        <?php
            }
            $sql1="SELECT * FROM horarios WHERE materia='$materia' AND hora='$i' AND dia='Jueves'";
            $resultado =$con->query($sql1);
            $filas1=$resultado->fetch_assoc();
            if($filas1>0){
        ?>
        <td bgcolor="yellow">&nbsp;</td>
        <?php } else { ?>
        <td>&nbsp;</td>
        <?php
            }
            $sql1="SELECT * FROM horarios WHERE materia='$materia' AND hora='$i' AND dia='Viernes'";
            $resultado =$con->query($sql1);
            $filas1=$resultado->fetch_assoc();
            if($filas1>0){
        ?>
        <td bgcolor="yellow">&nbsp;</td>
        <?php } else { ?>
        <td>&nbsp;</td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>