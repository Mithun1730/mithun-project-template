<?php 
include 'connect.php';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `login` WHERE 'login_username' = '$username' AND 'login_password' = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    if($row == 1){
        $_SESSION['user_id'] = $row['login_id'];
        header('location:index.php');
    }else{
        echo "invalid";
    }

}
?>