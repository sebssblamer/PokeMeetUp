
//https://www.youtube.com/watch?v=TePLX9Qnqt0 tutorial xml

//ALTAS

$('#reg_submit').click(function(){
    var nombre=document.getElementById("reg_name").value;
    var uname=document.getElementById("reg_uname").value;
    var pwd=document.getElementById("reg_password").value;
    var sexo="H"
    if(document.getElementById('reg_rbboy').checked) {
        sexo="H"
    }else if(document.getElementById('reg_rbgirl').checked) {
        sexo="M"
    }

    if(nombre != "" && uname != "" && pwd != ""){
        alert(" " + nombre + " " + uname + " " + pwd + " " + sexo)
    }
    else{
        alert("Datos incompletos")
    }

});

//XML





/*
function CargarDatos(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () { 
        if(this.readyState == 4 && this.status == 200){
            cargarXML(this);
        } 
    };
    xhr.open("GET","users.xml",true);
    xhr.send();
}

function cargarXML(xml){
    var docXML = xml.responseXML;
    var tabla = "<tr><th>Nombre</th><th>Sexo</th><th>Username</th><th>Password</th></tr>";
    var usuarios = docXML.getElementsByTagName("Cd");
    console.log(usuarios.lenght);
    for(var i = 0; i < usuarios.lenght; i++){
        tabla +="<tr><td>";
        tabla +=usuarios[i].getElementsByTagName("Name")[0].textContent;
        tabla +="</td><td>";
        tabla +=usuarios[i].getElementsByTagName("Username")[0].textContent;
        tabla +="</td><td>";
        tabla +=usuarios[i].getElementsByTagName("Password")[0].textContent;
        tabla +="</td><td>";
        tabla +=usuarios[i].getElementsByTagName("Sex")[0].textContent;
        tabla +="</td></tr>";
    } 

    document.getElementById("TablaUsuarios").innerHTML = tabla;
}
*/