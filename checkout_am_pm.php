<?php
session_start();
include "connect.php";
if (isset($_POST['checkout-am-pm'])) {
        $hours = $_SESSION['hours'];
        $emp_id = $_SESSION['id'];
        $id = $_SESSION['att_id'];
        $date = date('Y-m-d H-i-s');
        $sql = "UPDATE attendance SET `checkout_am_pm` = '$date',`attendance_emp_id` = '$emp_id' WHERE attendance_id = $id ";

        $result = mysqli_query($conn, $sql);
        if ($result) {
                          
                          header('location:home2.php');
                          $_SESSION['status1'] = "Checkout AM/PM Inserted";
                        }
                }
