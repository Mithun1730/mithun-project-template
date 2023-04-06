<?php
session_start();
include "connect.php";
if(isset($_POST['checkin-pm'])){
       
<<<<<<< Updated upstream
        $emp_id = $_SESSION['id'];
        $id=$_SESSION['att_id'];
        $date=date('Y-m-d h-i-s');
        $sql = "UPDATE attendance SET `checkin_pm` = '$date',`attendance_emp_id` = '$emp_id' WHERE attendance_id = $id " ;
    
        $result=mysqli_query($conn,$sql);
=======
        $id = $_SESSION['id'];
        $name = $_SESSION['username'];
        $title = $_SESSION['title'];
        $email = $_SESSION['email'];
        $check_in_pm = date("Y-m-d H-i-s");
        $date = date("Y-m-d");
        $sql = "INSERT INTO attendance (`attendance_emp_id`,`emp_name`,`emp_title`,`emp_email`,`checkin_pm`,`date`) VALUES ('$id','$name','$title','$email','$check_in_pm','$date')";
>>>>>>> Stashed changes
        $_SESSION['status2']="Check In PM Inserted";
        $result = mysqli_query($conn, $sql);
        header('Location:home2.php');  
}
?>