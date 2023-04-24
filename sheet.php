<?php
session_start();

include "connect.php";
if(isset($_POST['response'])){
        $response = $_POST['textarea'];
        $emp_id = $_SESSION['id'];
        $id = $_SESSION['att_id'];
        
        $sql = "UPDATE attendance SET `daily_report` = '$response',`attendance_emp_id` = '$emp_id' WHERE attendance_id = $id ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['report'] = "Thank You...";
            header("location:submission.php");
        }
    }
            ?>