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


if(isset($_GET["btnLogin"])){

    $uname =$_GET["uname"];
    $paswd = $_GET["paswd"];

    $user=buscaUname($uname);

    if($user->usr_pwd==$paswd){
        echo "Logeado";
        session_start();
        $_SESSION['username']=$user;
        
        header("Location:index.php");
    }
    else{
        echo "No logeado";
    }
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



?>