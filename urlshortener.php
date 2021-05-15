<?php
header('Content-Type: application/json');

//temp
$apiEndpoint = "https://api.spotifynutzer.xyz/";

$url = $_POST['url'];

$jsonResponse = json_encode(array("success"=>"2", "error" => "Unbekannter Fehler!"));

if(filter_var($url, FILTER_VALIDATE_URL)){

    $payload = '{"url":"'.$url.'"}';
    $handler = curl_init();
    $userAgent = "Website-Shortener";

    curl_setopt($handler, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($handler, CURLOPT_URL, $apiEndpoint);
    curl_setopt( $handler, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($handler, CURLOPT_POSTFIELDS, $payload);

    $apiResponse = curl_exec($handler);
    $httpStatus = curl_getinfo($handler, CURLINFO_HTTP_CODE);

    if($handler != '201'){
        $jsonResponse = json_encode(array("success"=>"2", "error" => "Unbekannter Fehler!"));
    }

    $apiResponse = (array) json_decode($apiResponse);
    $shortUrl = $apiEndpoint . $apiResponse['short'];
    $jsonResponse = json_encode(array("success"=>"1", "shortUrl" => $shortUrl));

}else{

    $jsonResponse = json_encode(array("success"=>"2", "error" => "Bitte gib eine richtige URL an!"));
}

echo $jsonResponse;
