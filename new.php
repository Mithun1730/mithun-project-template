<?php
function getaddress($lat,$lng)
{
$url ="https://www.googleapis.com/geolocation/v1/geolocate?latlng='.trim($lat).','.trim($lng).'&sensor=true_or_false&key=AIzaSyC8w_d-_A7bN6ztACP42dp-pBcD9HXOVqs'"; 
$json = @file_get_contents($url); //AIzaSyC8w_d-_A7bN6ztACP42dp-pBcD9HXOVqs
$data=json_decode($json);
$status = $data->status;
if($status=="OK") {
return $data->results[0]->formatted_address; 
}
else{
return false;
}
}
$lat = 10.7604408;
$lng = 79.1266288;
$address= getaddress($lat,$lng);
if($address)
{
echo $address;
}
else
{
echo "Not found";
}
?>
