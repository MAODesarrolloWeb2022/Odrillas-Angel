<?php 
include("operacion.php"); 
$cadena="EXAMEN";
$espacio=$_POST['espacio'];
    for($i=0;$i<6 ;$i++){
        echo $cadena[$i];
        for($j=0;$j<$espacio;$j++){
            ?> &nbsp; <?php
        }
    }
?>
<meta http-equiv="refresh" content="3;url=menu.html">
