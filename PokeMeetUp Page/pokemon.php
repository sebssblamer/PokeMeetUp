<?php

    require("class_user.php");
    $sesionInic=false;
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
    else{
        $ses_user=$_SESSION["username"];
        $sesionInic=true;
        if (isset($_GET['chosenPkmn'])) {
            

                        
            
            $f=file("usuarios.txt");
            $pkmn=$_GET['chosenPkmn'];
            $uname=$ses_user->usr_username;
            $gen=$ses_user->usr_sex;
            $nom=$ses_user->usr_name;
            $paswd=$ses_user->usr_pwd;
            $pais=$ses_user->usr_country;
            $est=$ses_user->usr_state;



            $v = $uname . " " . $gen . " " . $nom . " " . $paswd . " " . $pais . " " . $est . " " . $pkmn . "\n";
            $fi=fopen("usuarios.txt","w+");
            for($i=0; $i < count($f) ; $i++){
                $a=explode(" ",$f[$i]);
                if($a[0]==$ses_user->usr_username){
                    fwrite($fi,$v);
                }
                else{
                    fwrite($fi,$f[$i]);
                }
            }
            fclose($fi);
            

        }
    }

    

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
    <link rel="stylesheet" href="css/trainers.css">
    <link rel="stylesheet" href="pokemon.css">
    <title>Document</title>
</head>

<body>
    <!--BARRA DE NAVEGACION-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="d-block icono" src="img/pokeball_icon.png">
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
            <a class="nav-item nav-link"  href="reviews.php">Reviews</a>
            </div>
        </div>
    </nav>

   
    <!--LISTA DE USUARIOS-->
    <div class="container listaPokes">
    <br><h3> Selecciona tu pokemon favorito</h3><br>
        <ul class="list-group listausuarios">

        <?php
        $number = 1;

        
        for ($number = 1; $number <= 50; $number++) {

            $api = curl_init("https://pokeapi.co/api/v2/pokemon/$number/");
            curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($api);
            curl_close($api);
            $description = curl_init("https://pokeapi.co/api/v2/pokemon-species/$number/");
            curl_setopt($description, CURLOPT_RETURNTRANSFER, true);
            $response1 = curl_exec($description);
            curl_close($description);
            $json1 = json_decode($response1);
            $json = json_decode($response);
            $res = $json1->flavor_text_entries[1]->flavor_text   ;
            $final = str_replace("", " ", $res);

            $name = $json->name;
            $name = ucfirst($name);
        
            //echo '<ul class="list-group listausuarios">';
            printf ('<li class="list-group-item pkmnItem" onclick="muestraId(\'%s\')">',$name);
            echo    '<div class="d-flex flex-row ">';
            echo        '<img src ="'.$json->sprites->front_default, '" width="100">';
            echo       '<div>';
            echo            "<strong>$name</strong>";
            echo            "<p>Descripción<br>$final<br></p>";
            echo        "</div>";
         
            echo    "</div>";
            echo "</li>";
        }
        //echo    "</ul>";



        ?>
        </ul>

    </div>
    

</body>
<!--BOOTSTRAP-->
<script src="pokemon.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>