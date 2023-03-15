<?php
session_start();
include "head.php";
include "connect.php";
?>
<div class="page page-center">
  <div class="container container-tight py-4">
    <div class="text-center mb-4">
      <a href="#" class="navbar-brand navbar-brand-autodark"><img src="C:/Users/ASUS/OneDrive/Desktop/Logo.png"
          height="40" alt=""></a>
    </div>

    <div class="card card-md mx-auto" style="width: 50rem;">
      <div class="card-body">
        <h2 class="h2 text-center mb-4">Attendance Register</h2>
        <?php 
        if(isset($_SESSION['error1'])){?>
          <div class="alert alert-danger" role="alert">
          <?=$_SESSION['error1']?>
        </div>
       <?php }
        ?>
        
        <form action="Login_script.php" method="POST">
          <div class="mb-3">
            <label class="form-label"><b>Name</b></label>
            <input type="text" name="username" id="name" class="form-control" placeholder="" autocomplete="off"
              required="">
          </div>
          <div class="mb-3">
            <label class="form-label"><b>Password</b></label>
            <input type="text" name="password" id="pass" class="form-control" placeholder="" autocomplete="off"
              required="">
          </div>
          <div class="form-footer">
            <input type="submit" value="login">
            <!-- <button type="submit" name="signin" id="signin" class="btn btn-primary sign-in">SignIn</button> -->
            <!-- <button type="submit" name="login"  class="btn btn-primary sign-in">Log In</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- if(isset($_POST['login'])){
  $name=$_POST['name'];
  $pass=$_POST['pass'];
  $sql="SELECT * FROM employee_details WHERE 'name'='$name' AND 'password'='$pass'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_num_rows($result);
  $row2 = mysqli_fetch_array($result);
  if($row==1){
    $_SESSION['name']=$row2['name'];
    $_SESSION['id']=$row2['name'];
    $_SESSION['password']=$row2['password'];
  }else{
    "Invalid Credentials";
  }
}
  if(isset($_SESSION['name'])){
    header('location:employee.php');
  }
  ?>
 -->