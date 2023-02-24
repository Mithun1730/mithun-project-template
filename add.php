<?php
include "connect.php";
include "head.php";
include "navbar.php";

if(isset($_POST['adduser']))
{
$name=$_POST['name'];
$title=$_POST['title'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$salary=$_POST['salary'];
$email=$_POST['email'];

if(isset($_POST['name']) && isset($_POST['title']) 
&& isset($_POST['address']) && isset($_POST['email']) 
&& isset($_POST['salary']) && isset($_POST['mobile']) 
){
  $sql= "INSERT INTO employees('employee_name', 'title', 'employee_address', 'employee_email', 'emoloyee_mobile', 'basic_salary') VALUES ('$name','$title','$address','$email','$mobile','$salary')";
}
$result=mysqli_query($sql,$conn);
if($result){
  echo "Inserted Successfully";
}
}
include "footer";
?>