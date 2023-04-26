
<?php
session_start();
include "connect.php";
include "location.php";
// include "Geocoding.php";

if (isset($_POST['checkin-am'])) {
  $id = $_SESSION['id'];
  $name = $_SESSION['username'];
  $title = $_SESSION['title'];
  $email = $_SESSION['email'];
  $check_in_am = date("Y-m-d H-i-s");
  $date = date("Y-m-d");

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



  $sql = "INSERT INTO attendance (`attendance_emp_id`,`emp_name`,`emp_title`,`emp_email`,`checkin_am`,`date`,`location`) VALUES ('$id','$name','$title','$email','$check_in_am','$date','$street, $city, $state.')";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    $last = mysqli_insert_id($conn);
    $_SESSION['att_id'] = $last;
    $_SESSION['status'] = "Check In AM Inserted";

    header('location:home2.php');
    echo ' <button type= "submit" name="checkin-am" id="checkin-am" class="btn btn-outline-primary col-sm-6 check-in" disabled>Check In </button>';
  }
}

?>

