<?php
session_start();
include "connect.php";
if(isset($_POST['checkin-pm'])){
  
        $id=$_SESSION['id'];
        $date=date('Y-m-d h-i-s');
        $sql = "UPDATE attendance SET `checkin_pm` = '$date' WHERE attendance_emp_id = $id " ;
    
        $result=mysqli_query($conn,$sql);
        header('Location:home2.php');  
}
?>