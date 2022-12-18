<?php
$cant=$_POST['n'];
$acum=0;
for($i=0;$i<$cant;$i++){
    $acum+=$_POST['num'.$i];
}
echo 'la suma es = '.$acum;
?>