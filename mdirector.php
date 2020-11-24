<?php 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://trans-api.mdirector.com/oauth",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\"grant_type\": \"password\", \"client_id\": \"webapp\", \"username\": \"3-84030-api1\", \"password\": \"Xr6W2KCOf3obGXBJt1Q4\"}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Accept: application/json",
    "Cookie: srvmid=mdapp-03-php7"
  ),
));

$response = curl_exec($curl);

$data= json_decode($response, true);
$row = array($data);
//print_r("<pre>".print_r($row[0]['access_token'],true)."</pre>");
$token = $row[0]['access_token'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://trans-api.mdirector.com/messages/email",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n  \"from\": \"atencionaclientes@bzr.com.mx\",\r\n  \"to\": [\r\n    \"lleon@bzr.com.mx\"\r\n  ],\r\n  \"subject\": \"Test WS\",\r\n  \"text\": \"Hola, esto es un test DE BIZZARRO\",\r\n  \"html\": \"<html><head></head><body>Este es el contenido</body></html>\",\r\n  \"attachments\": [\r\n    {\r\n      \"type\": \"text/plain\",\r\n      \"name\": \"archivotest.txt\",\r\n      \"content\": \"ZXhhbXBsZSBmaWxl\"\r\n    }\r\n  ]\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Accept: application/json",
    "Authorization: Bearer ".$token,
    "Cookie: srvmid=mdapp-03-php7"
  ),
));

$response = curl_exec($curl);

$dota= json_decode($response, true);
$raw = array($dota);
$correo = $raw[0]['from'];

if ($correo=='') {
	$lo = 'no';
}else{
	$lo = 'si';
}

return $lo;
//print_r("<pre>".print_r($raw,true)."</pre>");






