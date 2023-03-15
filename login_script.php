<?php 
include "connect.php";
if(isset($_POST)){
  $name=$_POST['username'];
  $pass=$_POST['password'];
  $sql="SELECT * FROM `employee_details` WHERE name='$name' AND `password`='$pass'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_num_rows($result);
  $row2 = mysqli_fetch_array($result);
  if($row==1){
    $_SESSION['name']=$row2['name'];
    $_SESSION['id']=$row2['id'];
    header('location:index.php');
}else{
    $_SESSION['error1']='Invalid Username or Password';
    header('location:signin.php');
}
}
?>