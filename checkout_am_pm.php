<?php
session_start();
include "connect.php";
if (isset($_POST['checkout-am-pm'])) {
        $hours = $_SESSION['hours'];
        $emp_id = $_SESSION['id'];
<<<<<<< Updated upstream
        $id = $_SESSION['att_id'];
        $date = date('Y-m-d H-i-s');
        $sql = "UPDATE attendance SET `checkout_am_pm` = '$date',`attendance_emp_id` = '$emp_id' WHERE attendance_id = $id ";

=======
        // $id = $_SESSION['att_id'];
        // $date = date('Y-m-d H-i-s');
        $id = $_SESSION['id'];
        $name = $_SESSION['username'];
        $title = $_SESSION['title'];
        $email = $_SESSION['email'];
        $check_in_pm = date("Y-m-d H-i-s");
        $date = date("Y-m-d");
        
        $sql = "INSERT INTO attendance (`attendance_emp_id`,`emp_name`,`emp_title`,`emp_email`,`checkout_am_pm`,`date`) VALUES ('$id','$name','$title','$email','$check_in_pm','$date')";
>>>>>>> Stashed changes
        $result = mysqli_query($conn, $sql);
        if ($result) {
                          
                          header('location:home2.php');
                          $_SESSION['status1'] = "Checkout AM/PM Inserted";
                        }
                }
