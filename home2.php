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

                <h2 class="h2 text-center mb-4">Dashboard</h2>

                <div class="card">
                    <div class="card-body p-4 text-center">
                        <h3 class="m-0 mb-1"><span id="username">
                                <h3 class="m-0 mb-1 mx-auto">EXCITEON</h3> <br> <a href="#">Welcome,<?php echo $_SESSION['username'] ?></a>
                            </span></h3><div class="text-muted"><?php echo $_SESSION['email'] ?></div>
                        <h3 class="m-0 mb-1"><span id="userid">Employee ID:<?php echo $_SESSION['id'] ?></span></h3>
                        <div class="text-muted">Software Test Engineer</div>



                        <div class="mt-3">
                            <form action="checkin_am.php" method="post" id="checkin1">
                                <input type="hidden" value="1" name="type">
                                <button type="submit" name="checkin-am" id="checkin-am" class="btn btn-outline-info check-out">Check In </button>
                            </form>
                        </div>


                        <div class="mt-3">
                            <form action="checkout_am_pm.php" method="post" id="checkout1">
                                <input type="hidden" value="2" name="type">
                                <button type="submit" name="checkout-am-pm" id="checkout-am-pm" class="btn btn-outline-info check-out">Check-Out AM/PM</button>
                            </form>
                        </div>


                        <div class="mt-3">
                            <form action="checkin_pm.php" method="post" id="checkin2">
                                <input type="hidden" value="3" name="type">
                                <button type="submit" name="checkin-pm" id="checkin-pm" class="btn btn-outline-info check-out">Check-in PM</button>
                            </form>
                        </div>

                        <div class="mt-3">
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