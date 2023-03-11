<?php
include "connect.php";
if(isset($_POST['signin'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql="SELECT * FROM student WHERE 'name'='$name' 'email'='$email'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_row($result)){
        echo $row['name'];
        echo $row['email'];
    }
}
?>