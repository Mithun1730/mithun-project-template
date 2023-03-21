<?php
session_start();

include('connect.php');
include "head.php";



?>
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="#" class="navbar-brand navbar-brand-autodark"></a>
        </div>
        <div class="card card-md mx-auto">
            <div class="card-body">

                <h2 class="h2 text-center mb-2">Dashboard</h2>

                <div class="card">
                <a class="nav-link mt-2 mr-2" href="logout.php" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout text-muted" width="25" height="25" viewBox="0 0 25 25" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
   <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
</svg>
                    </span>
                    <span class="nav-link-title">
                    <div class="text-muted"><b>Logout</b></div>
                    </span>
                  </a>
                    <div class="card-body p-4 text-center">
                        <h3 class="m-0 mb-1"><span id="username">
                                <h3 class="m-0 mb-2 mx-auto display-6">EXCITEON</h3> 
                                
                                <br> <a href="#">Welcome,<?php echo $_SESSION['username'] ?></a>
                            </span></h3>
                            <a href=""><div class="text-muted"><?php echo $_SESSION['email'] ?></a></div>
                        <h3 class="m-0 mb-2 mt-2">Employee ID:<span id="userid" class="text-red"><?php echo $_SESSION['id'] ?></span></h3>
                        <div class="text-success"><?php echo $_SESSION['title']?></div>


                        <div class="mt-4">
                            <form action="checkin_am.php" method="post" id="checkin1">
                                <input type="hidden" value="1" name="type">
                                <button type="submit" name="checkin-am" id="checkin-am" class="btn btn-outline-info check-out">Check In </button>
                            </form>
                        </div>


                        <div class="mt-2">
                            <form action="checkout_am_pm.php" method="post" id="checkout1">
                                <input type="hidden" value="2" name="type">
                                <button type="submit" name="checkout-am-pm" id="checkout-am-pm" class="btn btn-outline-info check-out">Check-Out AM/PM</button>
                            </form>
                        </div>


                        <div class="mt-2">
                            <form action="checkin_pm.php" method="post" id="checkin2">
                                <input type="hidden" value="3" name="type">
                                <button type="submit" name="checkin-pm" id="checkin-pm" class="btn btn-outline-info check-out">Check-in PM</button>
                            </form>
                        </div>

                        <div class="mt-2">
                            <form action="checkout_pm.php" method="post" id="checkout2">
                                <input type="hidden" value="4" name="type">
                                <button type="submit" name="checkout-pm" id="checkout-pm" class="btn btn-outline-info check-out">Check-Out</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--
<script type="text/javascript">
    $(document).ready(function() {

        $("#checkin1").submit(function(e) {
            $("#checkin-am").attr("disabled", true);
            return true;

        });
        $("#checkout1").submit(function(e) {
            $("#checkout-am-pm").attr("disabled", true);
            return true;

        });
        $("#checkin2").submit(function(e) {
            $("#checkin-pm").attr("disabled", true);
            return true;

        });
        $("#checkout2").submit(function(e) {
            $("#checkout-pm").attr("disabled", true);
            return true;

        });
    });
</script>
-->