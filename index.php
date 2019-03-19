<?php

$ch = curl_init();
$url = 'https://api.sightmap.com/v1/assets/1273/multifamily/units?per-page=100';
$header = array(
    'x-api-key: 7d64ca3869544c469c3e7a586921ba37'
  );

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

$response =  curl_exec($ch);

// no response... api key setting is not correct?
// TODO to get data from api
echo $response;

$err = curl_error($ch);

curl_close($ch);

if ($err) {
  throw new Exception(curl_error($ch));
} else {
  $data = json_decode($response);
}

?>
