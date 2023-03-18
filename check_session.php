<?php
    session_start();
    include('connect.php');
    $checktoken = "SELECT * FROM user_token where employee_id='$_SESSION[id]' and status=1";
    $checkresult=mysqli_query($conn,$checktoken);
    $checkrow=mysqli_fetch_array($checkresult);
    if($checkrow['token']!=$_SESSION['token']){
        header('location: logout.php'); // Redirect User to Logout Page to destroy session
    }
?>