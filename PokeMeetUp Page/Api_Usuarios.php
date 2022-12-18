<?php
    $usuarios = simplexml_load_file("users.xml");
    $archivo = fopen("usuarios.txt", "r");
    $user["Usuario"] = array();
    

    while(!feof($archivo)){
        // Leyendo una linea
        $traer = fgets($archivo);
        
        $separada = explode(" ", $traer);
        
        $item = array(
            'nickname' => $separada[0],
            'genero' => $separada[1],
            'nombre' => $separada[2],
            'Pais' => $separada[4],
            'Ciudad' => $separada[5],
            'Pokemon' => $separada[6]
        );
        
        array_push($user["Usuario"], $item);
    }
    fclose($archivo);
    echo json_encode($user);
?>
