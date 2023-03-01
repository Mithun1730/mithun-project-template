<?php
include "connect.php";
if(isset($_POST['edituser']))
{
    $id=$_GET['editid'];
    $name=$_GET['name'];
    $title=$_POST['title'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $salary=$_POST['salary'];
    $mobile=$_POST['number'];
    
    echo $id;
    echo $name;
   
}