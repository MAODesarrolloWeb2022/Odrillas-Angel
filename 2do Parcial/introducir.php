<script src="java.js"></script>
<form action="javascript:calcular()" method="post">
<?php
    $numero=$_POST['numero'];
    for($i=0;$i<$numero;$i++){
        ?> <input type="number" name="num.$i.'">
        <br>
        <?php 
    } ?>
    <input type="hidden" id="n" name="n" value="<?php $numero ?> ">
    <input type="submit" value="calcular">
</form>