<?php
include 'connect.php';
if(isset($_POST['adduser'])){
$name=$_POST['name'];
$title=$_POST['name'];
$address=$_POST['name'];
$email=$_POST['name'];
$salary=$_POST['name'];
$mobile=$_POST['name'];

$sql="INSERT INTO `employees`(`employee_name`, `title`, `employee_address`, `employee_email`, `basic_salary`, `employee_mobile`) VALUES ('$name','$title','$address','$email','$salary','$mobile')";
$result=mysqli_query($conn,$sql);
if($result){
  header("location:index.php");
}
}
?>