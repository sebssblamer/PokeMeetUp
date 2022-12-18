<?php


    if(isset($_GET["addFriend"])){
        $f=file("friends.txt");
        $objUsr=buscaUname($_GET["addFriend"]);
        

        $v = $userViewer->usr_username ." ". $objUsr->usr_username ." \n";
        
        
            echo $v;
            $fi=fopen("friends.txt","w+");
            for($i=0; $i < count($f) ; $i++){
                fwrite($fi,$f[$i]);
            }
            fwrite($fi,$v);
            fclose($fi);
        

            echo "<script>alert('Amigo Añadido');</script>";
        header("Location:profile.php?profile=". $objUsr->usr_username);
    }


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


    
function buscaUnames($country){
    $ArrObjUsr=array();
    
    $f=file("friends.txt");
    $fi=fopen("friends.txt","r");
    for($i=0; $i < count($f) ; $i++){
        $a=explode(" ",$f[$i]);
        if($a[0]==$country){
            
            $objUsr = buscaUname($a[1]);
            
            array_push($ArrObjUsr,$objUsr);
        }
        
    }
    fclose($fi);
    
    return $ArrObjUsr;
}



    
?>