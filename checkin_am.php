
<?php
session_start();
include "connect.php";

if (isset($_POST['checkin-am'])) {
    $id = $_SESSION['id'];
    $name = $_SESSION['username'];
    $title = $_SESSION['title'];
    $email = $_SESSION['email'];
    $check_in_am = date("Y-m-d H-i-s");
    $date = date("Y-m-d");

    $sql = "INSERT INTO attendance (`attendance_emp_id`,`emp_name`,`emp_title`,`emp_email`,`checkin_am`,`date`) VALUES ('$id','$name','$title','$email','$check_in_am','$date')";

    $result = mysqli_query($conn, $sql);
    if($result){
    $last=mysqli_insert_id($conn);
    $_SESSION['att_id']=$last;
    $_SESSION['status']="Check In AM Inserted";
    
    header('location:home2.php');
    echo ' <button type= "submit" name="checkin-am" id="checkin-am" class="btn btn-outline-primary col-sm-6 check-in" disabled>Check In </button>';
    
    }
}
?>
