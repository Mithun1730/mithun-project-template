<?php
session_start();

include('connect.php');
include "head.php";
$employee_id = $_SESSION['id'];
$result = mysqli_query($conn, "SELECT * FROM attendance where attendance_emp_id = $employee_id");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Time</title>
    <style>
        body {
            background: url(img/eLogo.jpeg);
        }

        h3 {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

        }
    </style>
    <script>
        function hidediv() {
            document.getElementById('message').style.visibility = "hidden";
        }
        setTimeout("hidediv()", 2000)

        //Get form element
        //onclick="localStorage.buttonDisabled='disabled'; this.disabled=localStorage.buttonDisabled" 
    </script>
</head>

<body>
    <div class="page page-center ">
        <div class="container container-tight py-4">
            <div class="text-center mb-4 ">
                <a href="#" class="navbar-brand navbar-brand-autodark"></a>
            </div>
            <div class="card card-md mx-auto bg-primary">
                <div class="card-body">

                    <h2 class="h2 text-center mb-4 text-white">Dashboard</h2>

                    <div class="card bg-white">
                        <a class="nav-link mt-2 mr-2" href="logout.php">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-logout text-muted" width="25" height="25"
                                    viewBox="0 0 25 25" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                    </path>
                                    <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                <div class="text-muted"><b>Logout</b></div>
                            </span>
                        </a>
                        <div class="card-body p-4 text-center ">
                            <h3 class="m-0 mb-1"><span id="username">
                                    <h3 class="m-0 mb-2 mx-auto display-6 text-red">EXCITEON</h3>

                                    <br> <a href="#">Welcome,
                                        <?php echo $_SESSION['username'] ?>
                                    </a>
                                </span></h3>
                            <a href="">
                                <div class="text-muted">
                                    <?php echo $_SESSION['email'] ?>
                            </a>
                        </div>
                        <h3 class="m-0 mb-2 mt-2">Employee ID:<span id="userid" class="text-red">
                                <?php echo $_SESSION['id'] ?>
                            </span></h3>
                        <div class="text-success">
                            <?php echo $_SESSION['title'] ?>
                        </div>

                        <div id="message">
                            <?php
                            if (isset($_SESSION['status'])) { ?>
                                <div class="mx-auto mt-3">
                                    <div>
                                        <h5 class="alert-title text-red">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-check" width="100" height="100"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12l5 5l10 -10" />
                                            </svg>
                                            <?php echo $_SESSION['status']; ?>
                                        </h5>
                                    </div>
                                </div>
                            <?php }
                            if (isset($_SESSION['status1'])) { ?>
                                <div class="mx-auto mt-3">
                                    <div>
                                        <h5 class="alert-title text-red">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-check" width="100" height="100"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12l5 5l10 -10" />
                                            </svg>
                                            <?php echo $_SESSION['status1']; ?>
                                        </h5>
                                    </div>
                                </div>
                            <?php }

                            if (isset($_SESSION['status2'])) { ?>
                                <div class="mx-auto mt-3">
                                    <div>
                                        <h5 class="alert-title text-red">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-check" width="100" height="100"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12l5 5l10 -10" />
                                            </svg>
                                            <?php echo $_SESSION['status2']; ?>
                                        </h5>
                                    </div>
                                </div>
                            <?php }
                            if (isset($_SESSION['status3'])) { ?>
                                <div class="mx-auto mt-3">
                                    <div>
                                        <h5 class="alert-title text-red">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-check" width="100" height="100"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12l5 5l10 -10" />
                                            </svg>
                                            <?php echo $_SESSION['status3']; ?>
                                        </h5>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php
                        if (empty($row['checkin_am'])) { ?>
                            <div class="mt-3">
                                <form action="checkin_am.php" method="POST" id="checkin1">
                                    <input type="hidden" value="1" name="type">
                                    <button type="submit" name="checkin-am" id="checkin-am"
                                        class="btn btn-outline-primary col-sm-6 check-in">Check In </button>
                                </form>
                            </div>
                        <?php } ?>
                        <?php
                        if (empty($row['checkout_am_pm'])) { ?>
                            <div class="mt-2">
                                <form action="checkout_am_pm.php" method="post" id="checkout1">
                                    <input type="hidden" value="2" name="type">
                                    <button type="submit" name="checkout-am-pm" id="checkout-am-pm"
                                        class="btn btn-outline-primary col-sm-6 check-out-am-pm">Check-Out AM/PM</button>
                                </form>
                            </div>
                        <?php } ?>

                        <?php
                        if (empty($row['checkin_pm'])) { ?>
                            <div class="mt-2">
                                <form action="checkin_pm.php" method="post" id="checkin2">
                                    <input type="hidden" value="3" name="type">
                                    <button type="submit" name="checkin-pm" id="checkin-pm"
                                        class="btn btn-outline-primary col-sm-6 check-in-pm">Check-In PM</button>
                                </form>
                            </div>
                        <?php } ?>
                        <?php
                        if (empty($row['checkout_pm'])) { ?>
                            <div class="mt-2">
                                <form action="checkout_pm.php" method="post" id="checkout2">
                                    <input type="hidden" value="4" name="type">
                                    <button type="submit" name="checkout-pm" id="checkout-pm"
                                        class="btn btn-outline-primary col-sm-6 check-out">Check-Out</button>
                                </form>
                            </div>
                        <?php }else{ ?>
                        <p> <?php echo $_SESSION['username'] ?> We Meet next day</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>


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