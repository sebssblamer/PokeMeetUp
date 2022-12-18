<?php
$identificador = 1;
$ch=curl_init();
curl_setop($ch,CURLOPT_URL,"https://pokeapi.co/api/v2/pokemon/$identificador/");
curl_setopt($ch,CURLOPT_RETURNTRANFER,TRUE);
$respuesta=curl_exec($ch);
curl_close($ch)
$valores = json_decode($respuesta,TRUE);
echo "El nombre del pokemon es:" . $valores


?>
