<?php
if(!isset($_SESSION['name'])){
    header('location:signin.php');
  }
session_start();
include "connect.php";
include "head.php";
?>
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="#" class="navbar-brand navbar-brand-autodark"><img src="C:/Users/ASUS/OneDrive/Desktop/Logo.png" height="40" alt=""></a>
        </div>
        <div class="card card-md mx-auto" >
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Dashboard</h2>
                <form action="register.php" method="POST">
                    <div class="card">
                        <div class="card-body p-4 text-center">
                            <h3 class="m-0 mb-1"><span id="username"><a href="#">Welcome,<?php echo $_SESSION['username']?></a></span></h3>
                            <h3 class="m-0 mb-1"><span id="userid"><?php echo $_SESSION['id']?></span></h3>
                            <div class="text-muted">Software Test Engineer II</div>
                            <div class="mt-3">
                                <button onclick="disable(this)" type="submit" id="checkin-am" name="checkin-am" class="btn btn-outline-info check-in">Check-In AM</button>
                                <button onclick="disable(this)" type="submit" name="checkout-am-pm" id="checkout-am-pm" class="btn btn-outline-info check-out">Check-Out AM/PM</button>
                                <button onclick="disable(this)" type="submit" name="checkin-pm" id="checkin-pm" class="btn btn-outline-info check-out">Check-in PM</button>
                                <button onclick="disable(this)" type="submit" name="checkout-pm" id="checkout-pm" class="btn btn-outline-info check-out">Check-Out PM</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="script.js"></script>

