<?php 
session_start();
include "head.php";
include "connect.php";
?>
<div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="#" class="navbar-brand navbar-brand-autodark"><img src="C:/Users/ASUS/OneDrive/Desktop/Logo.png" height="40" alt=""></a>
        </div>
        <div class="card card-md mx-auto" style="width: 50rem;">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Attendance Register</h2>
            <form action="employee.php" method="POST">
              <div class="mb-3">
                <label class="form-label"><b>Name</b></label>
                <input type="text" name="name" id="name" class="form-control" placeholder="" autocomplete="off" required="">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Password</b></label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="" autocomplete="off" required="">
              </div>
              <div class="form-footer">

              <button type="submit" name="signin" id="signin" class="btn btn-primary sign-in">SignIn</button>

              <button type="submit" name="login" id="login" class="btn btn-primary sign-in">Log In</button>

              </div>
            </form>
          </div>
      </div>
    </div>
</div>
<?php 
if(isset($_POST['login'])){
  $name=$_POST['name'];
  $pass=$_POST['pass'];
  $sql="SELECT * FROM employee_details WHERE 'name'='$name' AND 'password'='$pass'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_num_rows($result);
  if($row==1){
    $_SESSION['name']=$row['name'];
    $_SESSION['password']=$row['password'];
  }else{
    "Invalid Credentials";
  }
}if(isset($_SESSION['name'])){
  header('location:employee.php');
}
?>