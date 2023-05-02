<?php 
session_start();
include "connect.php";
if(isset($_POST['add'])){
    date_default_timezone_get();
    $user = $_POST['username'];
    $pass  = $_POST['password'];
    $current_time = date('Y-m-d h:i:s:a');
    $sql = "INSERT INTO `login`(`login_username`, `login_password`, `login_lastlogin`) VALUES (' $user','$pass',' $current_time')";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'New admin added successfully!!';
        header('location:index.php');
        
    }
}
?>