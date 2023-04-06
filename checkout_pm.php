<?php
session_start();
include "connect.php";
if (isset($_POST['checkout-pm'])) {
<<<<<<< Updated upstream
        $hours = $_SESSION['hours'];
        $emp_id = $_SESSION['id'];
        $id = $_SESSION['att_id'];
        $date = date('Y-m-d h-i-s');
        $sql = "UPDATE attendance SET `checkout_pm` = '$date',`attendance_emp_id` = '$emp_id' WHERE attendance_id = $id ";
=======
        // $hours = $_SESSION['hours'];
        // $date = date('Y-m-d H-i-s');
        // $sql = "UPDATE attendance SET `checkout_pm` = '$date',`attendance_emp_id` = '$emp_id' WHERE attendance_id = $id ";
        // checkout_pm
        $id = $_SESSION['id'];
        $name = $_SESSION['username'];
        $title = $_SESSION['title'];
        $email = $_SESSION['email'];
        $checkout_pm = date("Y-m-d H-i-s");
        $date = date("Y-m-d");
        $sql = "INSERT INTO attendance (`attendance_emp_id`,`emp_name`,`emp_title`,`emp_email`,`checkout_pm`,`date`) VALUES ('$id','$name','$title','$email','$checkout_pm','$date')";
>>>>>>> Stashed changes
        $result = mysqli_query($conn, $sql);
        // header('location:home2.php');
        if ($result) {
                $sql2 = "SELECT * FROM attendance WHERE attendance_id = $id GROUP BY attendance_id";

//                 SELECT column_name(s)
// FROM table_name
// WHERE condition
// GROUP BY column_name(s)
// ORDER BY column_name(s);
                $result2 = mysqli_query($conn, $sql2);
                if ($result2) {
                        while ($row = mysqli_fetch_array($result2)) {
                                $checkin_am = strtotime($row['checkin_am']);
                                $checkout_am_pm = strtotime($row['checkout_am_pm']);
                                $checkin_pm = strtotime($row['checkin_pm']);
                                $checkout_pm = strtotime($row['checkout_pm']);
                                $timediff1 = abs($checkout_am_pm - $checkin_am); //time_difference 1
                                $timediff2 = abs($checkout_pm - $checkin_pm);   //time_difference 2

                                $hr1 = floor($timediff1 / (60 * 60)); //hour 1
                                $hr2 = floor($timediff2 / (60 * 60)); //hour 2

                                $min1 = floor($timediff1 / 60 % 60);  //minutes1
                                $min2 = floor($timediff2 / 60 % 60);  //minutes2

                                $mins = abs($min1 + $min2);    //total minutes

                                $sec1 = floor($timediff1 % 60);  //seconds 1
                                $sec2 = floor($timediff2 % 60);  //seconds 2

                                $sec = abs($sec1 + $sec2);  //total_seconds
<<<<<<< Updated upstream


                                if ($mins >= 60) {
                                        $hours = $hours + 1;
                                        $mins = $mins - 60;
                                }

                                if ($sec >= 60) {
                                        $sec = $sec - 60;
                                        $mins = $mins + 1;
                                }

=======
>>>>>>> Stashed changes
                                $hours = abs($hr1 + $hr2);   //total_hours

                                // print_r($timediff1.'<br>');
                                // print_r($timediff2.'<br>');
                                // print_r($hr1.'<br>');
                                // print_r($hr2.'<br>');
                                // print_r($id.'<br>');
                                // print_r($emp_id.'<br>');
                                // print_r($hours.'<br>');
                                // exit;
                                // $query = "INSERT INTO attendance ('total_hours',`attendance_emp_id`) VALUES('3', '$emp_id')  WHERE attendance_id = '$id'";
                                $query = "UPDATE attendance SET `total_hours` = '$hours' WHERE attendance_id  = $id ";
                                $result3 = mysqli_query($conn, $query);
                                $_SESSION['status3'] = "Checkout PM Inserted";
                                header('location:home2.php');
                        }
                }
        }
}
