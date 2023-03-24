<?php
session_start();
include "connect.php";
if(isset($_POST['checkout-pm'])){
  
        $id=$_SESSION['att_id'];
        $date=date('Y-m-d h-i-s');
        $sql = "UPDATE attendance SET `checkout_pm` = '$date' WHERE attendance_id = $id " ;
        $result=mysqli_query($conn,$sql);
        if($result){
                $_SESSION['status3']="Checkout PM Inserted";
              header('location:home2.php');
        }
           
}
?>
