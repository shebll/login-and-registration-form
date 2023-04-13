<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $name=$_POST['name'];
//     echo "Hello, $name!!";
// }



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo json_encode($arr);
    // echo json_encode(GetNames(9,23));
    $month = $_POST['month'];
    $day = $_POST['day'];

    error_log($month);
    error_log($day);

    echo json_encode(GetNames($month,$day));
    // echo GetBio(GetNames(9,23));
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
        $phpResult = json_decode($response);
        $actorsNameList = array();
        
        for ($i = 0; $i < 5 ; $i++) {
            
            $nameAPI = $phpResult[$i];
            $substring = '/name/';
            $nameAPI = substr($nameAPI, strlen($substring));
            $nameAPI = substr($nameAPI, 0, -1);
        
            error_log(print_r($nameAPI, true));

            array_push($actorsNameList,GetBio($nameAPI));

        }
        return $actorsNameList;
    }
}



function GetBio($actor){
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
    
     if ($err) {
        return "cURL Error #:" . $err;
     } 
     else {
        $phpResult = json_decode($response);
        $actorName = $phpResult->name;
        return $actorName;
    }
}