<?php
include "connect.php";
if(isset($_POST['adduser'])){
  $name=$_POST['name'];
  $title=$_POST['title'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $salary=$_POST['salary'];
  $mobile=$_POST['mobile'];

$sql="INSERT INTO `employees`(`employee_name`, `title`, `employee_address`, `employee_email`, `basic_salary`, `employee_mobile`) VALUES ('$name','$title','$address','$email','$salary','$mobile')";
$result=mysqli_query($conn,$sql);
if($result){
  header("location:index.php");
}
}
  ?>