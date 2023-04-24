<?php
session_start();

include('connect.php');
include('head.php');

$employee_id = $_SESSION['id'];
$result = mysqli_query($conn, "SELECT * FROM attendance where attendance_emp_id = $employee_id");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
    <div class="page page-center">
        <div class="container-fluid w-50 p-3">
            
            <div class="card card-md mx-auto bg-primary">

                <div class="card-body">

                    <h2 class="h2 text-center mb-4 text-white">Dashboard</h2>

                    <div class="card bg-white">
                        
                        <div>

                        
                        <a class="nav-link mt-2 mr-2" href="logout.php">
                       
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="30" height="30" viewBox="0 0 30 30" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                    </path>
                                    <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                </svg>
                        <b>Logout</b> 
    </div>                       
                                
                           
                        </a>
                        <div class="card-body p-1 text-center ">
                            <h3 class="m-0 mb-1"><span id="username">
                                    <img src="./img/Logo.png" alt="">
                                    <br> <a href="#">Welcome,
                                        <?php echo $_SESSION['username'] ?>
                                    </a>
                                </span></h3>
                            <a href="">
                                <div class="text-muted">
                                    <?php echo $_SESSION['email'] ?>
                            </a>
                        </div>
                        <h3 class="m-0 mb-2 mt-2 display-7">Employee ID:<span id="userid" class="text-red">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12l5 5l10 -10" />
                                            </svg>
                                            <?php echo $_SESSION['status3']; ?>
                                        </h5>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>


                        <div class="mt-3">
                            <form action="checkin_am.php" method="POST" id="checkin1">
                                <input type="hidden" value="1" name="type">
                                <button type="submit" name="checkin-am" id="checkin-am" class="btn btn-outline-primary col-sm-5 check-in">Check In </button>
                            </form>
                        </div>





                        <div class="mt-2">
                            <form action="checkout_am_pm.php" method="post" id="checkout1">
                                <input type="hidden" value="2" name="type">
                                <button type="submit" name="checkout-am-pm" id="checkout-am-pm" class="btn btn-outline-primary col-sm-5 check-out-am-pm">Check-Out AM/PM</button>
                            </form>
                        </div>


                        <div class="mt-2">
                            <form action="checkin_pm.php" method="post" id="checkin2">
                                <input type="hidden" value="3" name="type">
                                <button type="submit" name="checkin-pm" id="checkin-pm" class="btn btn-outline-primary col-sm-5 check-in-pm">Check-In PM</button>
                            </form>
                        </div>

                        

                        <div class="fluid mt-2">
                            <form action="checkout_pm.php" method="post" id="checkout2">
                                <input type="hidden" value="4" name="type">
                                <button type="submit" name="checkout-pm" id="checkout-pm" class="btn btn-outline-primary col-sm-5 check-out">Check-Out</button>
                            </form>  
    
                        </div>

                        
                       <!--Response-->
                     <?php  if (isset($_SESSION['report'])) { echo $_SESSION['report']; }?>
                        <button type="button" class="btn btn-warning col-sm-1-pd mb-5 mr-3 float-right" data-toggle="modal" data-target="#exampleModal">
                           <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                            </span>
                        </button>
                   
                        <!--Response-->

                        <!-- Modal -->
                        <form action="sheet.php" method="POST">
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Daily Work Sheet</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            
                                            <textarea class="form-control" name="textarea" rows="6" placeholder="Content.."></textarea>
                                            <script>
                                                const text = document.querySelector('textarea');
                                                text.addEventListener("keyup",e=>{
                                                    text.style.height = "200px";
                                                    
                                                    let height = e.target.scrollHeight;
                                                    text.style.height ='$(height)px'
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name='response'> Add Response </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>


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