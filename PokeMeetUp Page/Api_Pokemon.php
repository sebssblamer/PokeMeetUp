<?php 
    $url = "https://pokeapi.co/api/v2/pokemon/";

    if($_SERVER['REQUEST_METHOD']=='GET'){
        
        $var = $_GET["numero"];
        $url = $url . $var;
        
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        echo $resp;
        //echo json_encode($resp);
        
        // Close request to clear up some resources
        curl_close($curl);
        
        http_response_code(200);
    }else{
        http_response_code(405);
    }

?>