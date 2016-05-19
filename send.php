<?php
$apiKey = 'AIzaSyBYRvAntuQGvqUG5mPLX0vVa5UOOOzeYtg';
 
// Cabecera
$headers = array('Content-Type:application/json',
                 "Authorization:key=$apiKey");
 
// Datos
$payload =array('title' => 'Test Title',
                 'body' => 'Test Body');
$registrationIdsArray =array('APA91bF_m8MMIfe8wUKPozM7JACzuikxIxuKgafLZ9n55IfCaZxXH7mV5tEystR7jAK2qrespCH3yyb8BqAa-HUUjnbHTKX8pgWgxn88vnCSnP2U4IKnbiHwxWG9IF2bY3EQvBRFJoSg');
 
$data = array(
   'data' => $payload,
   'registration_ids' => $registrationIdsArray);

// echo json_encode($data);
// Petición
$ch = curl_init();
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch, CURLOPT_URL, "https://gcm-http.googleapis.com/gcm/send" );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($data));
 
// Conectamos y recuperamos la respuesta
$response = curl_exec($ch);

echo $response;
 
// Cerramos conexión
curl_close($ch);

?>
