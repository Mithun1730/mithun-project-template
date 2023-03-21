<?php
include 'connect.php';
if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$title=$_POST['title'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$salary=$_POST['salary'];
		$password="ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		$pass=substr(str_shuffle($password),0,8);		
		
		$sql = "INSERT INTO `employee_details`( `name`,`title`,`password`,`email`,`phone`,`city`,`basic_salary`) 
		VALUES ('$name','$title','$pass','$email','$phone','$city','$salary')";
		
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$title=$_POST['title'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$salary=$_POST['salary'];
		
		
		$sql = "UPDATE `employee_details` SET `name`='$name',`title`='$title',`email`='$email',`phone`='$phone',`city`='$city',`basic_salary`='$salary' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `employee_details` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM 'employee_details' WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>