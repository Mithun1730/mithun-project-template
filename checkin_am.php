<?php
session_start();
include "connect.php";

if (isset($_POST['checkin-am'])) {

    $id = $_SESSION['id'];
    $name = $_SESSION['username'];
    $email = $_SESSION['email'];
    $check_in_am = date("Y-m-d h-i-s");
    $date = date("Y-m-d");

    $sql = "INSERT INTO attendance (`attendance_emp_id`,`emp_name`,`emp_email`,`checkin_am`,`date`) VALUES ('$id','$name','$email','$check_in_am','$date')";

    $result = mysqli_query($conn, $sql);
    if($result){
    $last=mysqli_insert_id($conn);
    $_SESSION['att_id']=$last;
    $_SESSION['status']="Check In AM Inserted";
    header('location:home2.php');
    }
}

