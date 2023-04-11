<?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $b=$_POST['b'];
    $date = new DateTime($b);

    $day = $date->format('d'); 
    $month = $date->format('m'); 
    $year = $date->format('Y'); 
    GetNames($month,$day);
    
}


function GetNames($month, $day){
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=$month&day=$day",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
            "X-RapidAPI-Key: a36d152b57mshc729389e1f91e23p1ea9e0jsnbeea7a615574"
        ],
    ]);
    
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        GetBio($response);
    }
}

//--------------------------------------------------------------------------------------------------------------------


function GetBio($actors){
    $actornames = array();
    foreach($actors as $actor) {
        sleep(0.2);

     $curl = curl_init();

     curl_setopt_array($curl, [
        CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=$actor",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
            "X-RapidAPI-Key: a36d152b57mshc729389e1f91e23p1ea9e0jsnbeea7a615574"
        ],
     ]);
    
     $response = curl_exec($curl);
     $err = curl_error($curl);
    
     curl_close($curl);
     $data = json_decode($response, true);
    
     if ($err) {
        return "cURL Error #:" . $err;
     } else {

        $name = $data['name'];
        array_push($actornames, $name);
        // return $response;
     }
    }
    echo array('response' => $response);


    return $actornames;
    
}
