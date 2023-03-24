<?php
session_start();
include "connect.php";
if(isset($_POST['checkin-pm'])){
  
        $id=$_SESSION['att_id'];
        $date=date('Y-m-d h-i-s');
        $sql = "UPDATE attendance SET `checkin_pm` = '$date' WHERE attendance_id = $id " ;
    
        $result=mysqli_query($conn,$sql);
        $_SESSION['status2']="Check In PM Inserted";
        header('Location:home2.php');  
}
?>