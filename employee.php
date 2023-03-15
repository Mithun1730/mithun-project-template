<?php
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
