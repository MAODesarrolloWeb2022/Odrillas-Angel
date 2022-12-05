<?php
$columnas=$_POST['columnas'];
$filas=$_POST['filas'];
$auxc=$columnas;
$auxf=$filas;
?>
<table BORDER=2 CELLPADDING=2 CELLSPACING=2>
    <?php for($i=$filas;$i>=0;$i--){ ?>
        <tr>
        <?php for($j=$columnas;$j>=0;$j--){ 
            if($j==0){
                ?>  <td style="background-color: blue;"><b> <?php echo $auxf--; ?> </b></td> <?php
            }else{
                if($i==0){
                    ?> <td style="background-color: blue;"> <b><?php echo $auxc--; ?></b></td> <?php
                }else{
                    ?> <td> <?php 
                    if($j==0){
                        echo $auxf--;
                    }else{
                        echo $i*$j;
                    }
                    ?></td><?php
                }
            }
            } ?>
        </tr>
    <?php } ?>
</table>