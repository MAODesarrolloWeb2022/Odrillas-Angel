<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen final</title>
    <link rel="stylesheet" href="diseno.css">
</head>

<body>
    <div id="contenedor">
        <div id="inicio">
            <div id="ima">
                <span><img src="images/universidad.png" alt="" id="logo"></span><span><div id="cabeza">
                <table BORDER="1px" style="width: 700px;height: 78px;">
                    <tr>
                        <th onclick="javascript:inicio()" name="inicio">inicio</th>
                        <th onclick="javascript:lista()">lista</th>
                        <th onclick="javascript:horario()">horarios</th>
                        <th onclick="javascript:calificaciones()">calificaciones</th>
                        <th onclick="javascript:informes()">informes</th>
                    </tr>
                </table>
                <div id="titulo">
            </div></span>
            </div>
            
        </div>
        <div id="asignatura">Asignatura</div>
        <div id="medio">
            
            <div id="menu">
                <table BORDER=0>
                    <tr>
                        <th onclick="javascript:menu('SIS256')" id="SIS256" >SIS256</th>
                    </tr>
                    <tr>
                        <th onclick="javascript:menu('SIS258')" id="SIS258" >SIS258</th>
                    </tr>
                    <tr>
                        <th onclick="javascript:menu('SIS406')" id="SIS406" >SIS406</th>
                    </tr>
                </table>
            </div>
            <div id="contenido"> </div>
        </div>
    </div>
    <script src="java.js">
    </script>
</body>

</html>