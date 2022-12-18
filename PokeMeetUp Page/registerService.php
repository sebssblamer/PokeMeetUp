<?php


// ALTAS USUARIOS
if(isset($_GET["createUsuario"])){
    $f=file("usuarios.txt");
    $nom =$_GET["reg_name"];
    $gen  =$_GET["reg_gender"];
    $uname = $_GET["reg_uname"];
    $paswd = $_GET["reg_password"];
    $pais =  $_GET["selectPais"];
    $pais = str_replace(' ', '_', $pais);
    $est = $_GET["reg_estado"];
    $est = str_replace(' ', '_', $est);
    $pkmn =  $_GET["pkmnSelect"];
    $v = $uname . " " . $gen . " " . $nom . " " . $paswd . " " . $pais . " " . $est . " " . $pkmn . "\n";
    if(checarUname($uname)==false){
        $fi=fopen("usuarios.txt","w+");
        for($i=0; $i < count($f) ; $i++){
            fwrite($fi,$f[$i]);
        }
        fwrite($fi,$v);
        fclose($fi);
    }
    else{
        header("Location: http://localhost/ProyectoRedes/register.php?unameStatus=0");
    }
    
    //echo $uname . " " . $gen . " " . $nom . " " . $paswd . " " . $pais . " " . $est . " " . $pkmn;
}




//Checar si existe username
function checarUname($UnameBusc){
    $ExisteUname=false;
    $f=file("usuarios.txt");
    $fi=fopen("usuarios.txt","r");
    for($i=0; $i < count($f) ; $i++){
        $a=explode(" ",$f[$i]);
        if($a[0]==$UnameBusc){
            $ExisteUname=true;
        }
        
    }
    fclose($fi);
    return $ExisteUname;
}
    




?>