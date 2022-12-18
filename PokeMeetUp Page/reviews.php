<?php
function rating($str){
    for ($num = 1; $num <=$str; $num++){
        echo "&#11088;";
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
    <br><h3> User Reviews</h3><br>
    <div class="container listaPokes">
        <ul class="list-group listausuarios">
            <?php
            for ($number = 0; $number <= 25; $number++) {


                $people = curl_init("https://randomuser.me/api/?results=$number");
                curl_setopt($people, CURLOPT_RETURNTRANSFER, true);
                $response2 = curl_exec($people);
                curl_close($people);
                $json2 = json_decode($response2);
                $last = $json2->results[0]->name->last;
                $first = $json2->results[0]->name->first;
                $fullName = sprintf("%s %s", $first, $last);
                $city = $json2->results[0]->location->city;
                $country =  $json2->results[0]->location->country;
                $pfp = $json2->results[0]->picture->large;
                $stars=rand(1, 5);
                

                echo '<li class="list-group-item">';
                echo    '<div class="d-flex flex-row ">';
                echo '<img src ="' . $pfp, '" width="200">';
                echo       '<div>';
                echo            "<strong>$fullName</strong><br>";
                echo            "<p> Pais: $country <br>Ciudad: $city</br></p>";
                echo            "<p> Gave a rating of:</p>";
                echo            rating($stars);

                echo        "</div>";
                echo    "</div>";
                echo "</li>";
            }

            ?>
        </ul>
    </div>
    

</body>
<!--BOOTSTRAP-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>