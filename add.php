<?php
include "connnect.php";

extract($_POST);

if(isset($_POST['name']) && isset($_POST['title']) 
&& isset($_POST['address']) && isset($_POST['mobile']) 
&& isset($_POST['email']) && isset($_POST['salary'])){
  $sql= "INSERT INTO `employees`( `employee_name`, `title`, `employee_address`, `employee_email`, `emoloyee_mobile`, `basic_salary`) VALUES ('$name','$title','$address','$email','$mobile','$salary')";
}
$result=mysqli_query($sql,$conn);
if($result){
  echo "Inserted Successfully";
}
?>