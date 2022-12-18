<?php
if(isset($_GET["postMessage"])){
    $f=file("forum.txt");
    $uname =$ses_user->usr_username;
    $sex  =$ses_user->usr_sex;
    $msg = $_GET["ta_msg"];
    if($msg!=""){
        $msg = str_replace(' ', '_', $msg);
        $v = $uname . " " . $sex . " " . $msg .  "\n";
        echo $v;
        $fi=fopen("forum.txt","w+");
        for($i=0; $i < count($f) ; $i++){
            fwrite($fi,$f[$i]);
        }
        fwrite($fi,$v);
        fclose($fi);
        
    }
    
}

?>