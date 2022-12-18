function pregunta2(){
    document.getElementById('titulo').innerHTML='Pregunta 2 DOM en Javascript';
    var contenido = document.getElementById('contenido').style.background-color.darkgray;
}
function pregunta3(){
    document.getElementById('titulo').innerHTML='Pregunta 3 Insertar en Ajax';
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            document.getElementById("contenido").innerHTML=ajax.responseText;
        }
    }
    ajax.open("GET","forminsertar.html",true);
    ajax.send();
}
function insertarlibro(){
    document.getElementById('titulo').innerHTML='insertando libro';
    var ajax=new XMLHttpRequest();
    ajax.open("POST", "registrar.php", true)
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById('mensaje').innerHTML = ajax.responseText
        }
    }
    var datos=new FormData();
    datos.append("imagen",document.getElementById("imagen").files[0]);
    datos.append("Titulo",document.getElementById("Titulo").value);
    datos.append("autor",document.getElementById("autor").value);
    datos.append("ideditorial",document.getElementById("ideditorial").value);
    datos.append("anio",document.getElementById("anio").value);
    datos.append("idusuario",document.getElementById("idusuario").value);
    datos.append("idcarrera",document.getElementById("idcarrera").value);
    ajax.send(datos);    
}
function pregunta4(){
    document.getElementById('titulo').innerHTML='Pregunta 4 Listar fech';
    fetch("listar.php")
    .then(response => response.text())
    .then(data => document.getElementById("contenido").innerHTML=data);
}

function pregunta5(){
    document.getElementById('titulo').innerHTML='Pregunta 5 cuadros';
    fetch("formN.html")
    .then(response => response.text())
    .then(data => document.getElementById("contenido").innerHTML=data);
}
function cuadros(){
    var ajax=new XMLHttpRequest();
    ajax.open("POST", "introducir.php", true)
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById('resultado').innerHTML = ajax.responseText
        }
    }
    var datos=new FormData();
    datos.append("numero",document.getElementById("numero").value);
    ajax.send(datos);  
}
function calcular(){
    var ajax=new XMLHttpRequest();
    ajax.open("POST", "calcular.php", true)
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById('mensaje').innerHTML = ajax.responseText
        }
    }
    var nume=document.getElementById("n").value;
    var datos=new FormData();
    //console.log(nume);
    var num="";
    for(i=1;i<=nume;i++){
        var num="num"+i;
        datos.append(num,document.getElementById(num));
        console.log(document.getElementById(num));
    }
    datos.append("n",document.getElementById("n").value);
    ajax.send(datos);

    //comprobar la concatenacion  
    //document.getElementById("resultado").innerHTML="num"+i;
    
    //calculo directo

    /*var acum=0;
    //var nume=5;
    var i;
    for(i=1;i<=nume;i++){
        //acum +=i;
        acum += parseInt(document.getElementById("num"+i).value);
        console.log(acum);
    }
    document.getElementById("resultado").innerHTML=acum;*/
}
