<?php
    class operaciones {
        public $a;
        public $b;
        public $c;
        public function __construct($a,$b,$c){
            $this->a=$a;
            $this->b=$b;
            $this->c=$c;
        }
        function CalcularSuma($a1,$b1,$c1){
            return $a1*$b1*$c1;
        }
        function CalcularMayor($a,$b,$c){
            if($a<$b){
                if($a<$c){
                    return $a;
                }
                else{
                    return $c;
                }
            }
            else{
                if($b<$c){
                    return $b;
                }
                else{
                    return $c;
                }
            }
        }
    }
    function MostrarCalculos(){
        ?><table BORDER=1>
            <tr style="background-color: orange;">
                <th>ValorA</th>
                <th>ValorB</th>
                <th>ValorC</th>
            </tr>
            <tr>
                <td><?php $a; ?></td>
                <td><?php $b; ?></td>
                <td><?php $c; ?></td>
            </tr>
            <tr>
                <td style="background-color: orange;">Suma</td>
                <td><?php echo "llamar funcion CalcularSuma"?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: orange;">Mayor</td>
                <td><?php echo "llamar funcion CalcularMayor"?></td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <?php
    }
?>