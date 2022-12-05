<?php
    include('pregunta2.php');
    $valores=new operaciones(2,5,3);
    //echo MostrarCalculos();
    //echo $valores->geta()."<br>"; 
    //echo $valores->getb()."<br>"; 
    //echo $valores->getc()."<br>";
    $a=$valores->geta();
    $b=$valores->getb();
    $c=$valores->getc();
?>
<table BORDER=1>
            <tr style="background-color: orange;">
                <th>ValorA</th>
                <th>ValorB</th>
                <th>ValorC</th>
            </tr>
            <tr>
                <td><?php echo $valores->geta(); ?></td>
                <td><?php echo $valores->getb(); ?></td>
                <td><?php echo $valores->getc(); ?></td>
            </tr>
            <tr>
                <td style="background-color: orange;">Suma</td>
                <td><?php echo $valores->CalcularSuma($a,$b,$c)?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: orange;">Mayor</td>
                <td><?php echo $valores->CalcularMayor($a,$b,$c)?></td>
                <td>&nbsp;</td>
            </tr>
</table>