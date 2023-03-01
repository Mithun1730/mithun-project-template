<?php
include "connect.php";
if(isset($_POST['edit']))
{
    $id=$_POST['editdata'];
    $name=$_POST['name'];
    $title=$_POST['title'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $salary=$_POST['salary'];
    $mobile=$_POST['number'];

    $sql="UPDATE `employees` SET `employee_name`='$name',`title`='$title',`employee_address`='$address',`employee_email`='$email',`basic_salary`='$salary',`employee_mobile`='$mobile' WHERE 'employee_id'=$id";
}