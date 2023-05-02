<?php 
session_start();
include "head.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="d-flex flex-column theme-light">
    
    <div class="page page-center">
      <div class="container container-tight py-4">
        
        <div class="card card-md">
          <div class="card-body">
          <div class="text-center ">
          <a href="#" class="navbar-brand navbar-brand-autodark"><img src="img/logo 2.jpg" height="100" alt=""></a>
        </div>
            <h2 class="h2 text-center mb-4">Login Admin</h2>
           <h3 class="text-red"> <?php if(isset($_SESSION['login_error'])){
                echo $_SESSION['login_error'];
                unset($_SESSION['login_error']);
              } ?>
              </h3>
            <form action = "process.php" method="POST" >
              <div class="mb-3">
                <label class="form-label"><h3>Username</h3></label>
                <input type="text" name = 'username' class="form-control" placeholder="Username" required >
              </div>
              <div class="mb-2">
              
                
                <label class="form-label"><h3>Password</h3></label>
                  <input type="password" name="password" class="form-control" placeholder="Your password" required>
                </div>
              
              
              <div class="form-footer">
                <button type="submit" name="login" class="btn btn-primary w-100" >Log in</button>
              </div>
            </form>
          </div>
         
         
        </div>
       
      </div>
    </div>
  

</body>
</html>