
<?php
    require("trainersService.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="trainers.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
   
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

<div class="contenedor d-flex justify-content-around">
    <div>
    <h5>Find Trainers</h5>
    </div>
</div>
<div class="contenedor contenedor2 d-flex justify-content-around ">
    <div>
        <h5>Search Parameters</h5>
    </div>
    <form class=" navBarDiv d-flex justify-content-around">
        <input type="text" class="form-control" id="b_uname" name="b_uname"  placeholder="Search Username">
        <button class="btn btn-dark" type="submit" name="buscaUsername">Search</button>
   
    </form>


    <form class=" navBarDiv d-flex justify-content-around">
        <select  class="form-control" id="b_country" name="b_country">
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antartica">Antarctica</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
            <option value="Botswana">Botswana</option>
            <option value="Bouvet Island">Bouvet Island</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Congo">Congo, the Democratic Republic of the</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
            <option value="Croatia">Croatia (Hrvatska)</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="East Timor">East Timor</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="France Metropolitan">France, Metropolitan</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Territories">French Southern Territories</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Greece">Greece</option>
            <option value="Greenland">Greenland</option>
            <option value="Grenada">Grenada</option>
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
            <option value="Holy See">Holy See (Vatican City State)</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran (Islamic Republic of)</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
            <option value="Korea">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao">Lao People's Democratic Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon" selected>Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macau">Macau</option>
            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Martinique">Martinique</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico" selected="selected">Mexico</option>
            <option value="Micronesia">Micronesia, Federated States of</option>
            <option value="Moldova">Moldova, Republic of</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Netherlands Antilles">Netherlands Antilles</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk Island">Norfolk Island</option>
            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Pitcairn">Pitcairn</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Reunion">Reunion</option>
            <option value="Romania">Romania</option>
            <option value="Russia">Russian Federation</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
            <option value="Saint LUCIA">Saint LUCIA</option>
            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia (Slovak Republic)</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
            <option value="Span">Spain</option>
            <option value="SriLanka">Sri Lanka</option>
            <option value="St. Helena">St. Helena</option>
            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syria">Syrian Arab Republic</option>
            <option value="Taiwan">Taiwan, Province of China</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania">Tanzania, United Republic of</option>
            <option value="Thailand">Thailand</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks and Caicos">Turks and Caicos Islands</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Viet Nam</option>
            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Serbia">Serbia</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>
        <button class="btn btn-dark" type="submit" name="buscaCountry">Search</button>
    </form>

    <form class=" navBarDiv d-flex justify-content-around">
        <input type="text" class="form-control" id="b_state" name="b_state"  placeholder="Search State">
        <button class="btn btn-dark" type="submit" name="buscaState">Search</button>
   
    </form>

    <form class=" navBarDiv d-flex justify-content-around">
            <select   class="form-control" id="b_poke" name="b_poke">
                    <option value="Pikachu">Pikachu</option>
            </select>
            <button class="btn btn-dark" type="submit" name="buscaPokemon">Search</button>
    </form>
    


    
</div>

    
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col"></th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Country</th>
                <th scope="col">State</th>
                <th scope="col">Pokemon</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                 if (isset($_GET['searchOpt'])) {
                    $status=$_GET['searchOpt'];
                    //SE BUSCO UN USUARIO (SE MUESTRA EL USUARIO)
                    if($status==0){
                        $search=$_GET['search'];
                        
                        $user=buscaUname($search);
                        if($user->usr_username!=""){
                            echo "<tr>";
                            if($user->usr_sex=="H"){
                                echo "<td><img class='d-block iconoUsuario' src='img/trainerM.png' ></td>";
                            }
                            else{
                                echo "<td><img class='d-block iconoUsuario' src='img/trainerF.png' ></td>";
                            }
                            
                            echo "<td>" . $user->usr_username ."</td>";
                            echo "<td>" . $user->usr_name ."</td>";
                            if($user->usr_sex=="H"){
                                echo "<td><img class='d-block iconoSexo' src='img/male.png' ></td>";    
                            }
                            else{
                                echo "<td><img class='d-block iconoSexo' src='img/female.png' ></td>";                 
                            }
                            
                            echo "<td>" . str_replace('_', ' ', $user->usr_country) ."</td>";
                            echo "<td>" . $user->usr_state ."</td>";
                            echo "<td>" . $user->usr_pkmn ."</td>";
                            echo "<td><a href='profile.php?profile=" .$user->usr_username."'><button class='btn btn-success w-50'><strong>Add</strong></button></a></td>";

                            echo "</tr>";
                        }
                        else{
                            echo "No se encontro";
                        }
                        
                    }
                    //SE BUSCO UN PAIS(SE MUESTRA LISTA DE USUARIOS CON ESE PAIS)
                    else if($status==1){
                        $search=$_GET['search'];
                        
                        $ArrCountryUsrs=buscaPais($search);
                        if($ArrCountryUsrs){
                            foreach($ArrCountryUsrs as $user){
                                echo "<tr>";
                                if($user->usr_sex=="H"){
                                    echo "<td><img class='d-block iconoUsuario' src='img/trainerM.png' ></td>";
                                }
                                else{
                                    echo "<td><img class='d-block iconoUsuario' src='img/trainerF.png' ></td>";
                                }
                                
                                echo "<td>" . $user->usr_username ."</td>";
                                echo "<td>" . $user->usr_name ."</td>";
                                if($user->usr_sex=="H"){
                                    echo "<td><img class='d-block iconoSexo' src='img/male.png' ></td>";    
                                }
                                else{
                                    echo "<td><img class='d-block iconoSexo' src='img/female.png' ></td>";                 
                                }
                                
                                echo "<td>" . str_replace('_', ' ', $user->usr_country) ."</td>";
                                echo "<td>" . $user->usr_state ."</td>";
                                echo "<td>" . $user->usr_pkmn ."</td>";
                                echo "<td><a href='profile.php?profile=" .$user->usr_usernam."'><button class='btn btn-success w-50'><strong>Add</strong></button></a></td>";
                                echo "</tr>";
                            }
                            
                        }
                        else{
                            echo "No hay nada";
                        }
                    }
                    //SE BUSCO UN ESTADO(SE MUESTRA LISTA DE USUARIOS CON ESE ESTADO)
                    else if($status==2){
                        $search=$_GET['search'];
                        
                        $ArrStateUsrs=buscaEstado($search);
                        if($ArrStateUsrs){
                            foreach($ArrStateUsrs as $user){
                                echo "<tr>";
                                if($user->usr_sex=="H"){
                                    echo "<td><img class='d-block iconoUsuario' src='img/trainerM.png' ></td>";
                                }
                                else{
                                    echo "<td><img class='d-block iconoUsuario' src='img/trainerF.png' ></td>";
                                }
                                
                                echo "<td>" . $user->usr_username ."</td>";
                                echo "<td>" . $user->usr_name ."</td>";
                                if($user->usr_sex=="H"){
                                    echo "<td><img class='d-block iconoSexo' src='img/male.png' ></td>";    
                                }
                                else{
                                    echo "<td><img class='d-block iconoSexo' src='img/female.png' ></td>";                 
                                }
                                
                                echo "<td>" . str_replace('_', ' ', $user->usr_country) ."</td>";
                                echo "<td>" . $user->usr_state ."</td>";
                                echo "<td>" . $user->usr_pkmn ."</td>";
                                echo "<td><a href='profile.php?profile=" .$user->usr_username."'><button class='btn btn-success w-50'><strong>Add</strong></button></a></td>";
                                echo "</tr>";  
                            }
                        }
                        else{
                            echo "No hay nada";
                        }
                    }
                    //SE BUSCO UN POKEMON
                    else if($status==3){
                        $search=$_GET['search'];
                        
                        $ArrPokeUsrs=buscaPoke($search ."\n");
                        if($ArrPokeUsrs){
                            foreach($ArrPokeUsrs as $user){
                                echo "<tr>";
                                if($user->usr_sex=="H"){
                                    echo "<td><img class='d-block iconoUsuario' src='img/trainerM.png' ></td>";
                                }
                                else{
                                    echo "<td><img class='d-block iconoUsuario' src='img/trainerF.png' ></td>";
                                }
                                
                                echo "<td>" . $user->usr_username ."</td>";
                                echo "<td>" . $user->usr_name ."</td>";
                                if($user->usr_sex=="H"){
                                    echo "<td><img class='d-block iconoSexo' src='img/male.png' ></td>";    
                                }
                                else{
                                    echo "<td><img class='d-block iconoSexo' src='img/female.png' ></td>";                 
                                }
                                
                                echo "<td>" . str_replace('_', ' ', $user->usr_country) ."</td>";
                                echo "<td>" . $user->usr_state ."</td>";
                                echo "<td>" . $user->usr_pkmn ."</td>";
                                echo "<td><a href='profile.php?profile=" .$user->usr_username."'><button class='btn btn-success w-50'><strong>Add</strong></button></a></td>";

                                echo "</tr>";  
                            }
                        }
                        else{
                            echo "No hay nada";
                        }
                    }
                 }
                 else{
                    //NO SE BUSCO NADA (SE MUESTRA TODO)
                    $f=file("usuarios.txt");
                    $r="";
                    for($i=0 ; $i < count($f) ; $i++){
                        $a=explode(" ",$f[$i]);
                        echo "<tr>";
                        if($a[1]=="H"){
                            echo "<td><img class='d-block iconoUsuario' src='img/trainerM.png' ></td>";
                        }
                        else{
                            echo "<td><img class='d-block iconoUsuario' src='img/trainerF.png' ></td>";
                        }
                        
                        echo "<td>" . $a[0] ."</td>";
                        echo "<td>" . $a[2] ."</td>";
                        if($a[1]=="H"){
                            echo "<td><img class='d-block iconoSexo' src='img/male.png' ></td>";    
                        }
                        else{
                            echo "<td><img class='d-block iconoSexo' src='img/female.png' ></td>";                 
                        }
                        
                        echo "<td>" . str_replace('_', ' ', $a[4]) ."</td>";
                        echo "<td>" . $a[5] ."</td>";
                        echo "<td>" . $a[6] ."</td>";
                        echo "<td><a href='profile.php?profile=" .$a[0]."'><button class='btn btn-success w-50'><strong>Add</strong></button></a></td>";
                        echo "</tr>";
                    }
                 }


                    
                ?>
                
                
            </tbody>
        </table>

     
    
</body>
<!--BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>