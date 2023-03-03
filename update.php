<?php
include "connect.php";
if(isset($_POST['edituser'])){
    $name=$_POST['editname'];
    $title=$_POST['edittitle'];
    $address=$_POST['editaddress'];
    $email=$_POST['editemail'];
    $salary=$_POST['editsalary'];
    $mobile=$_POST['editmobile'];

    $sql="UPDATE `employees` SET `employee_name`='$name',`title`='$title',`employee_address`='$address',`employee_email`=' $email',`basic_salary`='$salary',`employee_mobile`='$mobile' WHERE 1";


}
?>