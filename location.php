<?php
$access_token = "pk.3516c19fe24eb4340b2eb09318c3abc7";
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
//$latitude = 10.7872256;
//$longitude = 79.1379968;
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://us1.locationiq.com/v1/reverse?key=$access_token&lat=$latitude&lon=$longitude&format=json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, true);
$address = $data['address'];
$street = $address['road'];
$city = $address['city'];
$state = $address['state'];
$country = $address['country'];
echo "$address";
?>
