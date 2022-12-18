<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    !--BOOTSTRAP-->
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
    <div class="container listaPokes">
        <br><h3> Usuarios Registrados (API)</h3><br>
        <ul class="list-group listausuarios">
        <?php 
            $url = "localhost/ProyectoRedes/Api_Usuarios.php";
            // Get cURL resource
            $curl = curl_init();
            // Set some options - we are passing in a useragent too here
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $url,
            ));
            // Send the request & save response to $resp
            $resp = curl_exec($curl);
            $usuarios = json_decode($resp);

            //Count of lines
            $archivo = fopen ("usuarios.txt", "r");

            $num_lineas = 0;

            while (!feof ($archivo)) {
                if ($linea = fgets($archivo))
                   $num_lineas++;
            }
            fclose ($archivo);

            //Draw of Interface
            foreach($usuarios as $json){
                for($i=0; $i < $num_lineas; $i++){
                    echo "<li class='list-group-item pkmnItem' '>";
                    echo    '<div class="d-flex flex-row ">';
                    if($json[$i]->genero == "M")
                        echo        '<img src =" img/trainerf.png " width="200">';
                    else
                        echo        '<img src =" img/trainerm.png " width="200">';
                    echo       '<div>';
                    echo            "<strong>" . $json[$i]->nombre . "</strong>";
                    echo            "<p>Descripción<br>" . $json[$i]->nickname . "<br>" . $json[$i]->Pais . "<br>" . $json[$i]->Ciudad . "<br>" . $json[$i]->Pokemon . "<br>" . $json[$i]->genero . "</p>";
                    echo        "</div>";

                    echo    "</div>";
                    echo "</li>";
                }
            }

            // Close request to clear up some resources
            curl_close($curl);
        ?>
        </ul>
    </div>
</body>
<!--BOOTSTRAP-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>