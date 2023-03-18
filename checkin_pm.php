<?php
session_start();
include "connect.php";
if(isset($_POST['checkin-pm'])){
  
        $id=$_SESSION['id'];
        
        $sql = "UPDATE attendance SET `checkin_pm` = now() WHERE attendance_emp_id = $id " ;
    
        $result=mysqli_query($conn,$sql);
        header('Location:home2.php');  
}
?>