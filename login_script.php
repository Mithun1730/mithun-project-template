<?php 
include "connect.php";
if(isset($_POST)){
  $name=$_POST['username'];
  $pass=$_POST['password'];
  $sql="SELECT * FROM `employee_details` WHERE name='$name' AND `password`='$pass'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_num_rows($result);
  $row2 = mysqli_fetch_array($result);
print_r($result);
print_r($row2).'</br>';
print_r($row);
// exit;
  if($row===1){
    $_SESSION['name']=$row2['name'];
    $_SESSION['password']=$row2['password'];
    $_SESSION['id']=$row2['id'];
    $_SESSION["name"] = "green";
    header('location:index.php');
}else{
    header('location:signin.php');
}
}
?>