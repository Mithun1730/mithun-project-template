<?php
include "connect.php";
$selected_emp = $_GET['selected_emp'];
$sql = "SELECT * FROM  attendance WHERE attendance_emp_id = $selected_emp";
$result = mysqli_query($conn,$sql);
$employee = mysqli_fetch_object($result);
echo json_encode($employee);
?>
