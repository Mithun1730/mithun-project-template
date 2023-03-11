<?php 
include "head.php";
?>
<div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="#" class="navbar-brand navbar-brand-autodark"><img src="C:/Users/ASUS/OneDrive/Desktop/Logo.png" height="40" alt=""></a>
        </div>
        <div class="card card-md" style="width:50rem;">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Attendance Register</h2>
            <form action="employee.php" method="POST">
              <div class="mb-3">
                <label class="form-label"><b>Name</b></label>
                <input type="text" name="name" id="name" class="form-control" placeholder="" autocomplete="off" required="">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Email</b></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" autocomplete="off" required="">
              </div>
              
              <div class="form-footer">
                
              <button type="submit" name="signin" id="signin" class="btn btn-primary sign-in">SignIn</button>
              </div>
            </form>
          </div>
 
      </div>
    </div>
</div>
