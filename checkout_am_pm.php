<?php
session_start();
include "connect.php";
if(isset($_POST['checkout-am-pm'])){
        $id=$_SESSION['id'];
        $date=date('Y-m-d h-i-s');
        $sql = "UPDATE attendance SET `checkout_am_pm` = '$date' WHERE attendance_emp_id = $id " ;
    
        $result=mysqli_query($conn,$sql);
        if($result){
                echo json_encode(array("statusCode"=>200));
                header('location:home2.php');
  
        }
        
}
?>