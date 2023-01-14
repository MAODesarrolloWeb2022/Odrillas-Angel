function inicio(){
    document.getElementById('titulo').innerHTML="Inicio";
    fetch('inicio.html')
        .then(response => response.text())
        .then(data => contenido.innerHTML = data)
        .catch(error => console.log(error));
}
function lista(){
    document.getElementById('titulo').innerHTML="Lista";
    var html="";
    html=`Nro de cuadros <br>
    <div style="text-align: center; width: 300px;">
    <input type="number" name="numero" id="numero">
    <br>
    <button onclick="obtener()">obtener</button>
</div>`;
document.getElementById('contenido').innerHTML = html;
}
function obtener(){
    var numero = parseInt(document.getElementById('numero').value);
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            document.getElementById("contenido").innerHTML=ajax.responseText;
        }
    }
    ajax.open("GET","cuadros.php ?numero="+ numero,true);
    ajax.send();
}
function menu(materia){
    if(materia=='SIS256'){
        document.getElementById('SIS256').style.backgroundColor='gray';
        document.getElementById('SIS258').style.backgroundColor='white';
        document.getElementById('SIS406').style.backgroundColor='white';
    }
    if(materia=='SIS258'){
        document.getElementById('SIS256').style.backgroundColor='white';
        document.getElementById('SIS258').style.backgroundColor='gray';
        document.getElementById('SIS406').style.backgroundColor='white';
    }
    if(materia=='SIS406'){
        document.getElementById('SIS256').style.backgroundColor='white';
        document.getElementById('SIS258').style.backgroundColor='white';
        document.getElementById('SIS406').style.backgroundColor='gray';
    }
    return materia;
}
function horario(){
    document.getElementById('titulo').innerHTML="HorarioS";
    if(document.getElementById('SIS256').style.backgroundColor=='gray'){
        var materia='SIS256';
    }
    if(document.getElementById('SIS258').style.backgroundColor=='gray'){
        var materia='SIS258';
    }
    if(document.getElementById('SIS406').style.backgroundColor=='gray'){
        var materia='SIS406';
    }
    console.log(materia);
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            document.getElementById("contenido").innerHTML=ajax.responseText;
        }
    }
    ajax.open("GET","horarios.php ?materia="+ materia,true);
    ajax.send();
}
function calificaciones(){
    document.getElementById('titulo').innerHTML="Calificaciones";
    if(document.getElementById('SIS256').style.backgroundColor=='gray'){
        var materia='SIS256';
    }
    if(document.getElementById('SIS258').style.backgroundColor=='gray'){
        var materia='SIS258';
    }
    if(document.getElementById('SIS406').style.backgroundColor=='gray'){
        var materia='SIS406';
    }
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            document.getElementById("contenido").innerHTML=ajax.responseText;
        }
    }
    ajax.open("GET","editarcalificaciones.php ?materia="+ materia,true);
    ajax.send();
}
function calificar(){
    var id =document.getElementById('id').innerHTML;
    var nota=parseInt(document.getElementById('nota').value);
    fetch("calificar.php ?id=" + id + "&nota="+nota)
    .then(response => response.text())
    .then(data => contenido.innerHTML=data)
    .catch(error => console.log(error));
}
function informes(){
    document.getElementById('titulo').innerHTML="Informes";
    fetch("formularioinforme.php")
    .then(response => response.text())
    .then(data => contenido.innerHTML=data)
    .catch(error => console.log(error));
}
function porcentaje(){
    var mes=document.getElementById('mes').value;
    var s1=parseInt(document.getElementById('porcentaje256').value);
    var s2=parseInt(document.getElementById('porcentaje258').value);
    var s3=parseInt(document.getElementById('porcentaje406').value);
    fetch("porcentaje.php ?mes=" + mes + "&p1="+s1+"&p2="+s2+"&p3="+s3)
    .then(response => response.text())
    .catch(error => console.log(error));
}
function tablainforme(){
    fetch("tablainforme.php")
    .then(response => response.text())
    .catch(error => console.log(error));
}

