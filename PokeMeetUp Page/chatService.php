<?php
    if(isset($_GET["postMessage"])){
        $f=file("chat.txt");
        $ses_user=$_SESSION["username"];
        $msg = $_GET["ta_msg"];
        $friend=$_GET["postMessage"];
        $objFriend=buscaUname($friend);
        if($msg!=""){
            $msg = str_replace(' ', '_', $msg);
            $v = $ses_user->usr_username . " " . $objFriend->usr_username . " " . $ses_user->usr_username ." ".$ses_user->usr_sex . " ". $msg . " \n";
            
            $fi=fopen("chat.txt","w+");
            for($i=0; $i < count($f) ; $i++){
                fwrite($fi,$f[$i]);
            }
            fwrite($fi,$v);
            fclose($fi);
            
        }

        header("Location:chat.php?chattingWith=" . $friend);
        
    }


    
  


?>