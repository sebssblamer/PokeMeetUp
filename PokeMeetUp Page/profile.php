<?php

    require("class_user.php");
    

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


    $perfilPersonal=true;
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
    else{
        if (isset($_GET['profile'])) {
          $perfilPersonal=false;
          $ses_user=buscaUname($_GET['profile']);
        }
        else{
          $ses_user=$_SESSION["username"];
         
        }
        $userViewer=$_SESSION["username"];
        
        
    }
    require("profileService.php");
    require("forumService.php");

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
    <link rel="stylesheet" href="profile.css">
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
            <a class="nav-item nav-link"  href="reviews.php">Reviews</a>
            
          </div>
        </div>
      </nav>
      
      <!--Perfil-->
      
      <div class=" loginForm">
            <div class=" loginForm2">
                <form class=" loginForm3">
             
                    <div class="chatLog d-flex">
                      
                        
                    </div>
                    <br><br>

                    <?php
                    if($ses_user->usr_sex=="H"){
                            echo "<img class='d-block iconoUsuario' src='img/trainerM.png' >";
                            $sexname="boy";
                        }
                        else{
                            echo "<img class='d-block iconoUsuario' src='img/trainerF.png' >";
                            $sexname="girl";
                        }
                      
                      ?>
                    <br>
                    <h2><?php echo "Hi my name is " .$ses_user->usr_username ?></h2>
                    <h4><?php echo "I am a " .$sexname . " from " . $ses_user->usr_country ?></h4>
                    <br>
                    <h5><?php echo "I am currently living in the state of " . $ses_user->usr_state ?></h5>
                    <h5><?php echo "My favorite pokemon is " . $ses_user->usr_pkmn ?></h5>
                    <br>
                    <p>You can add me or start a convo with me just click below</p>
                    <button class="btn btn-success" value="<?php echo $ses_user->usr_username ?>" type="submit" name="addFriend">Add me as a friend</button>
                    <button class="btn btn-info"><a  style="text-decoration:none; color:white;" href="chat.php?chattingWith=<?php echo $ses_user->usr_username ?>">Start conversation</a></button>
                    
                    <br><br><br><br>
                    <h4>My friend list</h4>
                    <br>
                    <table class="table container">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">Sex</th>
                            <th scope="col">Country</th>
                            <th scope="col">State</th>
                            <th scope="col">Pokemon</th>
                            <!--<th scope="col"></th>-->
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            
                            $ArrUsrs=buscaUnames($ses_user->usr_username);
                            if($ArrUsrs){
                              foreach($ArrUsrs as $user){
                                  
                                    echo "<tr>";
                                    if($user->usr_sex=="H"){
                                        echo "<td><img class='d-block iconoUsuario' src='img/trainerM.png' style='width:80px; height:80px;' ></td>";
                                    }
                                    else{
                                        echo "<td><img class='d-block iconoUsuario' src='img/trainerF.png' style='width:80px; height:80px;' ></td>";
                                    }
                                    
                                    echo "<td>" . $user->usr_username ."</td>";
                                    echo "<td>" . $user->usr_name ."</td>";
                                    if($user->usr_sex=="H"){
                                        echo "<td><img class='d-block iconoSexo' src='img/male.png' style='width:30px; height:30px;' ></td>";    
                                    }
                                    else{
                                        echo "<td><img class='d-block iconoSexo' src='img/female.png' style='width:30px; height:30px;' ></td>";                 
                                    }
                                    
                                    echo "<td>" . str_replace('_', ' ', $user->usr_country) ."</td>";
                                    echo "<td>" . $user->usr_state ."</td>";
                                    echo "<td>" . $user->usr_pkmn ."</td>";
                                    //echo "<td><a href='profile.php?profile=" .$user->usr_username."'><button class='btn btn-success w-50'><strong>View</strong></button></a></td>";
        
                                    echo "</tr>";
                      
                              }
                            }
                            
                           ?>
                        </tbody>
                      </table>
                      <br> <br>
                      <br>
      

                </form>
            </div>
      </div>
      
      
    
</body>
<!--BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>