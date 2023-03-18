<?php
session_start();
include "connect.php";

    if(isset($_POST['checkin-am'])){

    $id=$_SESSION['id'];
    $name=$_SESSION['username'];
    $email=$_SESSION['email'];
    $check_in_am = date("Y-m-d h-i-s");

    $sql = "INSERT INTO attendance (`attendance_emp_id`,`emp_name`,`emp_email`,`checkin_am`) VALUES ('$id','$name','$email','$check_in_am')" ;

    $result=mysqli_query($conn,$sql);

    header('Location:home2.php');  
    } 
?>