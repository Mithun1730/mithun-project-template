<?php
session_start();
include "connect.php";
if(isset($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql="SELECT * FROM student WHERE 'name'='$name''email'='$email'";
    $result=mysqli_query($conn,$sql);
    $row_cnt = $result->num_rows;
    var_dump($row_cnt);
    If($row_cnt === 1){
        // header("Location:http://localhost/mithun-project-template/index.php/");
        header("Location:http://localhost/mithun/mithun-project-template/index.php");
    }else{
        // header("Location:http://localhost/mithun-project-template/signin.php/");
        header("Location:http://localhost/mithun/mithun-project-template/signin.php");
        // header("Refresh:0");
    }
    
}
        // while($row = mysqli_fetch_row($result)){
        //     // var_dump($row[1]);
        //     // echo $row['name'];
        //     // echo $row['email'];
        // }
        // your url 
?>

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
                <form action="employeedata.php" method="POST">
                    <div class="card">
                        <div class="card-body p-4 text-center">
                            <h3 class="m-0 mb-1"><a href="#">Welcome,<?php echo $_SESSION['name']?></a></h3>
                            <div class="text-muted">Software Test Engineer II</div>
                            <div class="mt-3">

                                <button onclick="disable(this)" type="submit" name="checkin" class="btn btn-outline-info check-in">Check-In</button>
                                <button onclick="disable(this)" type="submit" name="checkout" class="btn btn-outline-info check-out">Check-Out</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="script.js"></script>

