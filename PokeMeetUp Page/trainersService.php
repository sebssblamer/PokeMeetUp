<?php

class Usuario{
    public $usr_username="";
    public $usr_name="";
    public $usr_sex="";
    public $usr_pwd="";
    public $usr_country="";
    public $usr_state="";
    public $usr_pkmn="";

    public function constructor($uname,$name,$sex,$pwd,$country,$state,$poke){
        $this->usr_username=$uname;
        $this->usr_name=$name;
        $this->usr_sex=$sex;
        $this->usr_pwd=$pwd;
        $this->usr_country=$country;
        $this->usr_state=$state;
        $this->usr_pkmn=$poke;

    }
}


if(isset($_GET["buscaUsername"])){
    $uname =$_GET["b_uname"];
    buscaUname($uname);

    header("Location: http://localhost/ProyectoRedes/trainers.php?searchOpt=0&search=".$uname);

    //echo $uname;
}

if(isset($_GET["buscaCountry"])){
    $country =$_GET["b_country"];
    $country = str_replace(' ', '_', $country);
    header("Location: http://localhost/ProyectoRedes/trainers.php?searchOpt=1&search=".$country);

}

if(isset($_GET["buscaState"])){
    $state =$_GET["b_state"];
    header("Location: http://localhost/ProyectoRedes/trainers.php?searchOpt=2&search=".$state);
    //echo $state;
}

if(isset($_GET["buscaPokemon"])){
    $poke =$_GET["b_poke"];
    
    header("Location: http://localhost/ProyectoRedes/trainers.php?searchOpt=3&search=".$poke);
    echo $poke;
}


function buscaUname($uname){
    $objUsr = new Usuario();
    $f=file("usuarios.txt");
    $fi=fopen("usuarios.txt","r");
    for($i=0; $i < count($f) ; $i++){
        $a=explode(" ",$f[$i]);
        if($a[0]==$uname){
            
            //echo $a[0] . " " . $a[1] . " " . $a[2] . " " . $a[3] . " " . $a[4] . " " . $a[5] . " " . $a[6];
            $objUsr->constructor($a[0],$a[2],$a[1],$a[3],$a[4],$a[5],$a[6]);
            //echo $objUsr->usr_username ;
            
        }
        
    }
    fclose($fi);
    return $objUsr;
}

function buscaPais($country){
    $ArrObjUsr=array();
    
    $f=file("usuarios.txt");
    $fi=fopen("usuarios.txt","r");
    for($i=0; $i < count($f) ; $i++){
        $a=explode(" ",$f[$i]);
        if($a[4]==$country){
            $objUsr = new Usuario();
            $objUsr->constructor($a[0],$a[2],$a[1],$a[3],$a[4],$a[5],$a[6]);    
            array_push($ArrObjUsr,$objUsr);
        }
        
    }
    fclose($fi);

    return $ArrObjUsr;
}


function buscaEstado($state){
    $ArrObjUsr=array();
    
    $f=file("usuarios.txt");
    $fi=fopen("usuarios.txt","r");
    for($i=0; $i < count($f) ; $i++){
        
        $a=explode(" ",$f[$i]);
        
        if($a[5]==$state){
            $objUsr = new Usuario();
            $objUsr->constructor($a[0],$a[2],$a[1],$a[3],$a[4],$a[5],$a[6]);    
            array_push($ArrObjUsr,$objUsr);
        }
        
    }
    fclose($fi);

    return $ArrObjUsr;
}


function buscaPoke($poke){
    $ArrObjUsr=array();
    
    $f=file("usuarios.txt");
    $fi=fopen("usuarios.txt","r");
    for($i=0; $i < count($f) ; $i++){
        
        $a=explode(" ",$f[$i]);
        
        if($a[6]==$poke){
            $objUsr = new Usuario();
            $objUsr->constructor($a[0],$a[2],$a[1],$a[3],$a[4],$a[5],$a[6]);    
            array_push($ArrObjUsr,$objUsr);
        }
        
    }
    fclose($fi);

    return $ArrObjUsr;
}




?>