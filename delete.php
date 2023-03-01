<?php
include 'connect.php';
if(isset($_POST['deletedata'])){
    $id=$_POST['deleteid'];

    $sql="DELETE FROM employees WHERE employee_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');
    }
}
?>