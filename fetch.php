<?php
include "connect.php";
if(isset($_POST['id'])){
    $sql = "SELECT * FROM attendance WHERE attendance_id = '".$_POST["id"]."'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
        echo $row['daily_report'];
    }
}
?>