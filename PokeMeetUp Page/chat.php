<?php

    require("class_user.php");

    
   

    $sesionInic=false;
    session_start();
   
    if(!isset($_SESSION["username"] ) && !isset($_GET["chattingWith"])){
        header("Location:login.php");
    }
    else{
        $ses_user=$_SESSION["username"];
        $sesionInic=true;
        $friend=$_GET["chattingWith"];
        //var_dump($objFriend);
    }

    function buscaUname($uname){
        $objUsr = new Usuario();
        $f=file("usuarios.txt");
        $fi=fopen("usuarios.txt","r");
        for($i=0; $i < count($f) ; $i++){
            $a=explode(" ",$f[$i]);
            if($a[0]==$uname){
                $objUsr->constructor($a[0],$a[2],$a[1],$a[3],$a[4],$a[5],$a[6]);                
            }
            
        }
        fclose($fi);
        return $objUsr;
    }


    require("chatService.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="chat.css">
    <title>Document</title>
</head>
<body>
    <!--BARRA DE NAVEGACION-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="d-block icono" src="img/pokeball_icon.png" >
        <a class="navbar-brand" href="#">Poke-Meetup</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              
          <a class="nav-item nav-link active" href="index.php">Main Page </a>
            <a class="nav-item nav-link" href="pokemon.php">Pokemón</a>
            <a class="nav-item nav-link" href="trainers.php">Find Trainers</a>
            <a class="nav-item nav-link"  href="register.php">Register</a>
            <a class="nav-item nav-link"  href="profile.php">Profile</a>
            <a class="nav-item nav-link"  href="forum.php">Forum</a>
            <a class="nav-item nav-link"  href="login.php">Login</a>
            <a class="nav-item nav-link"  href="logout.php">Logout</a>
            
          </div>
        </div>
      </nav>

      <div class=" loginForm">
            <div class=" loginForm2">
                <form class=" loginForm3">
             
                    <div class="chatLog d-flex">
                        <?php
                        if($ses_user->usr_sex=="H"){
                            echo "<img class='d-block iconoUsuario' src='img/trainerM.png' >";
                        }
                        else{
                            echo "<img class='d-block iconoUsuario' src='img/trainerF.png' >";
                        }

                        ?>
                        
                        <textarea name="ta_msg" class="form-control" class="taChat" rows="2"></textarea>
                        <button class="btn btn-warning" type="submit" name="postMessage" value="<?php echo $_GET["chattingWith"]  ?>">&#128172;</button>
                    </div>
                    <br>
                    <h3>Chatting with <?php echo $friend  ?></h3>
                    
                        
                    <?php
                    $f=file("chat.txt");
                    $r="";
                    for($i=0 ; $i < count($f) ; $i++){
                        $a=explode(" ",$f[$i]);
                        if(($a[0]==$ses_user->usr_username && $a[1] == $friend) || ($a[0]==$friend && $a[1] == $ses_user->usr_username) ){
                            
                            
                            echo "<div class='forumMessage d-flex'>";
                            
                                if($a[3]=="H"){
                                    echo "<img class='d-block iconoUsuario' src='img/trainerM.png' >";
                                }
                                else{
                                    echo "<img class='d-block iconoUsuario' src='img/trainerF.png' >";
                                }
    
                                
                                echo "<div class='MessageText'>";
                                echo    "<strong>".$a[0]." says:</strong><br>";
                                echo    "<p>". str_replace('_', ' ', $a[4]) ."</p>";
                                echo "</div>";
                            echo "</div>";
                        }
                        
                    }
                        
                    
                    ?>
                    
                    <br>
                </form>
                
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
      

</body>
<!--BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>