<form action="restar.php" method="post">
<?php
    $_COOKIE['numero']=$_POST['n'];
    echo 'primer vector'.'<br>';
    for($i=0;$i<$_COOKIE['numero'];$i++){
        echo '<input type="number" name="vectori'.$i.'">';
        echo '<br>';
    }
    echo '<br>'.'segundo vector'.'<br>';
    for($j=0;$j<$_COOKIE['numero'];$j++){
        echo '<input type="number" name="vectorj'.$j.'">';
        echo '<br>';
    }
    setcookie("numero",$_COOKIE['numero'],0);
    echo '<input type="submit" value="enviar">';
?>
</form>