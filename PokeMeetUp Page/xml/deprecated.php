
 function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        myFunction(this);
        }
        };
        xhttp.open("GET", "users.xml", true);
        xhttp.send();
    }
    
    function myFunction(xml) {
        var i;
        var xmlDoc = xml.responseXML;
        var table="<tr><th>Nombre</th><th>Sexo</th><th>Username</th><th>Password</th></tr>";
        
        var x = xmlDoc.getElementsByTagName("Cd");
        for (i = 0; i <x.length; i++) {
        table += "<tr><td>" +
        x[i].getElementsByTagName("Name")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("Username")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("Sex")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("Password")[0].childNodes[0].nodeValue +
        "</td></tr>";
        }
        document.getElementById("demo").innerHTML = table;
    }


    function addUser(){
        var xml;
        if (window.ActiveXObject) {
            xml = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            xml = new XMLHttpRequest();
        }

        xml.onreadystatechange = function() {
            if (xml.readyState == 4 && xml.status == 200) {
                var resp = xml.responseXML;

                var Cd = xml.responseXML.createElement("Cd");

                var Cd_Name = xml.responseXML.createElement("Name");
                Cd_Name.appendChild(xml.responseXML.createTextNode("El pepe"));

                var Cd_Username = xml.responseXML.createElement("Username");
                Cd_Username.appendChild(xml.responseXML.createTextNode("Mr Njoroge"));

                var Cd_Sex = xml.responseXML.createElement("Sex");
                Cd_Sex.appendChild(xml.responseXML.createTextNode("H"));

                var Cd_Pwd = xml.responseXML.createElement("Password");
                Cd_Pwd.appendChild(xml.responseXML.createTextNode("1234"));

                Cd.appendChild(Cd_Name);
                Cd.appendChild(Cd_Username);
                Cd.appendChild(Cd_Sex);
                Cd.appendChild(Cd_Pwd);
        
            
                xml.responseXML.documentElement.appendChild(Cd);
            }
             
        }
        xml.open("GET", "users.xml", true);
        xml.send(null);
         
    }