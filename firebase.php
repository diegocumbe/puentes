<?php
$url="https://puentes-270304.firebaseio.com/data.json";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$response = curl_exec($ch);
curl_close($ch);


/*print_r($response);
    $data = json_decode($response, true);
    foreach ( $data as $key => $value) {
    echo $data[$key]["fecha_de_actualización"],
         $data[$key]["designación"],
         $data[$key]["dirección"].
         $data[$key]["comuna"];
}
*/
?>