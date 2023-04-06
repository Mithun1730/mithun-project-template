<?php 
session_start();
include "connect.php";

if(isset($_POST['login'])){
  if(isset($_POST['latitude']) && isset($_POST['longitude'])){
   // function getaddress($latitude,$longitude)
 // {
    // $url = "http://maps.google.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=AIzaSyC8w_d-_A7bN6ztACP42dp-pBcD9HXOVqs";

    // $geocode = file_get_contents($url);
    // $json = json_decode($geocode);
    // $address = $json->results[0]->formatted_address;
    // return $address;    
  //}
  
  $name=$_POST['username'];
  $pass=$_POST['password'];
  $sql="SELECT * FROM `employee_details` WHERE name='$name' AND `password`='$pass'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_num_rows($result);
  $row2 = mysqli_fetch_array($result);
  if($row==1){
  $_SESSION['username']=$row2['name'];
  $_SESSION['title']=$row2['title'];
  $_SESSION['id'] = $row2['id'];
  $_SESSION['email']=$row2['email'];
  header('location:home2.php');  // Login Success   
  }    else{
  $_SESSION['error1']='Invalid Username or Password';
  header('location:signin.php');
  }           
  }    
  } else{
  header('location:signin.php');
  }        
     ?>

<?php       
// $latitude = $_POST['latitude'];
// $longitude = $_POST['longitude'];  

// $result = getAddress($latitude, $longitude);
// echo 'Address:' . $result;   
 ?>
