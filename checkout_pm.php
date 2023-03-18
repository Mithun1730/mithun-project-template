<?php
session_start();
include "connect.php";
if(isset($_POST['checkout-pm'])){
  
        $id=$_SESSION['id'];
        
        $sql = "UPDATE attendance SET `checkout_pm` =now() WHERE attendance_emp_id = $id " ;
    
        $result=mysqli_query($conn,$sql);
        header('Location:home2.php');  
}
?>