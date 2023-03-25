<?php
session_start();
include "connect.php";
if(isset($_POST['checkout-pm'])){

        $emp_id = $_SESSION['id'];
        $id=$_SESSION['att_id'];
        $date=date('Y-m-d h-i-s');
        $sql = "UPDATE attendance SET `checkout_pm` = '$date',`attendance_emp_id` = '$emp_id' WHERE attendance_id = $id " ;
        $result=mysqli_query($conn,$sql);
        if($result){
                $_SESSION['status3']="Checkout PM Inserted";
              header('location:home2.php');
        }
           
}
?>
