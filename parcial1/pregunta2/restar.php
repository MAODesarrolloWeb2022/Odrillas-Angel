<?php
$cant=$_COOKIE['numero'];
for($k=0;$k<$cant;$k++){
    $vector[$k]=$_POST['vectori'.$k]-$_POST['vectorj'.$k];
?>
    <input type="text" value="<?php echo $vector[$k]; ?> "> <br>
<?php } ?>