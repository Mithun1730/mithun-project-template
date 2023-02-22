<?php
include "connnect.php";

extract($_POST);
if(isset($_POST['NameSend']) && isset($_POST['TitleSend']) 
&& isset($_POST['AddressSend']) && isset($_POST['MobileSend']) 
&& isset($_POST['EmailSend']) && isset($_POST['SalarySend'])){
  $sql= "INSERT INTO `employees`( `employee_name`, `title`, `employee_address`, `employee_email`, `emoloyee_mobile`, `basic_salary`) VALUES ('$NameSend','$TitleSend','$AddressSend','$EmailSend','$MobileSend','$SalarySend')";
}
$result=mysqli_query($sql,$conn);
if($result){
  echo "Inserted Successfully";
}
?>