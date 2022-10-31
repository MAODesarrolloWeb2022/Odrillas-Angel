<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="diseno.css">
</head>

<body>
    <div class="contenedor">
        <div class="cabeza">
            <div class="logo">
            <span>
                <?php for($i=0;$i<40;$i++){
                    ?>&nbsp;<?php
                }?>
        </span><img src="img/usfx.png" alt="">
            </div>
            <span>
                <?php for($i=0;$i<10;$i++){
                    ?>&nbsp;<?php
                }?>
        </span>
            <div class="titulo">            
                <div>
                    <span class="r1">U</span><span class="rojo">NIVERSIDAD DE </span> <span class="r1">S</span><span
                        class="rojo">AN </span>
                    <span class="r1">F</span><span class="rojo">RANCISCO </span><span class="r1">X</span><span
                        class="rojo">AVIER</span>
                </div>
                <div>
                    <p class="b1">F<span class="blue">ACULTAD DE </span><span class="b1">T</span><span
                        class="blue">ECNOLOGIA</span><span>
                <?php for($i=0;$i<20;$i++){
                    ?>&nbsp;<?php
                }?>
        </span> <span class="r2">S</span><span class="rojo2">UCR</span>
                <span class="yellow2">E - </span><span class="y2">B</span><span class="yellow2">OL</span>
                <span class="green2">IVIA</span></p>
                </div>
            </div>
        </div>
        <div class="cabeza">Carrera Ing de Sistemas -Ing en ciencia s de la Computacion 
            <span>
                <?php for($i=0;$i<100;$i++){
                    ?>&nbsp;<?php
                }?>
        </span> Semestre 2-2022</div>
        <div class="izquierda">
            <ul class="menuvertical">
                <li><a href="informacion.php">informacion</a></li>
                <li><a href="horarios.php">horarios</a> </li>
            </ul>
        </div>
        <div class="center">
            <table border="1">
                <tr>
                    <th colspan="2">Alumnos</th>
                </tr>
                <tr>
                    <th>nombre</th>
                    <th>apellido</th>
                </tr>
                <tr>
                    <td>Angel</td>
                    <td>Odrillas</td>
                </tr>
                <tr>
                    <td>Miguel</td>
                    <td>Mamani</td>
                </tr>
                <tr>
                    <td>Mario</td>
                    <td>Zuniga</td>
                </tr>
            </table>
        </div>
        <div class="derecha">
            <ul class="menuvertical">
                <li><a href="docentes.php">docentes</a></li>
                <li><a href="alumnos.php">alumnos</a> </li>
            </ul>
        </div>
        <div class="pie">
            Miguel Angel Odrillas Mamani
            <p>35-4391</p>

        </div>
    </div>
</body>

</html>