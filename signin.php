<?php
 session_start();

include "head.php";
include "connect.php";
?>
<div class="page page-center">
  <div class="container container-tight py-4">
    <div class="text-center mx-auto">
      <!--<a href="#" class="navbar-brand navbar-brand-autodark"><img src="C:/Users/ASUS/OneDrive/Desktop/Logo.png"
          height="40" alt=""></a>-->
    </div>

    <div class="card card-md mx-auto" ">
      <div class="card-body">
        <h2 class="h2 text-center mb-4">Attendance Register</h2>
        <?php 
        if(isset($_SESSION['error1'])){?>
        <div class="alert alert-danger alert-dismissible" role="alert">
  <div class="d-flex">
    <div>
      <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 8l0 4" /><path d="M12 16l.01 0" /></svg>
    </div>
    <div>
      <h4 class="alert-title"><strong><?=$_SESSION['error1']?></strong>&hellip;</h4>
      <div class="text-muted">   </div>
    </div>
  </div>
  <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
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
             <button type="submit" name="login"  class="btn btn-primary sign-in">Log In</button>
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