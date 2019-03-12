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

  // TODO to crate 2 groups
  // sudo - crate/separate 2 groups (bigger than 1)
  $list2Key = array('unit', 'sq', 'num', 'date');
  foreach($list2Keys as $key) {
      if(isset($list[num] > 1) {
          $list2[num] = $list[num];
          unset($list[num]);
      } else {
          $list2[$key] = null;
      }
  }

  $list1 = $list;

  // TODO to show each key and value
  // sudo - to display each value
  foreach ($list1 as $list)
  {
    echo $list;
  }

?>


<!-- If date looks like this -->
<!-- data Object
(
    [list1] => Array
        (
            [0] => stdClass Object
                (
                    [unit] => H1
                    [sq] => 991
                    [num] => 10
                    [date] => 2019-01-05 18:34:25
                )

            [1] => stdClass Object
                (
                    [unit] => H2
                    [sq] => 1013
                    [num] => 1
                    [date] => 2019-02-05 18:34:25
                )
        )
  ) -->
