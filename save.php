<?php
include 'connect.php';
if (count($_POST) > 0) {
	if ($_POST['type'] == 1) {
		$name = $_POST['name'];
		$title = $_POST['title'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$city = $_POST['city'];
		$salary = $_POST['salary'];
		$password = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		$pass = substr(str_shuffle($password), 0, 8);

		require 'mail/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'mitchellmithun@gmail.com';                 // SMTP username
		$mail->Password = 'qfoeosaqqgevurnf';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('mitchellmithun@gmail.com', 'Test Mail');
		$mail->addAddress($email);     // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Greetings from Exciteon, The Tree of Technology.';
		$mail->Body    = 'Hi, <b>' .$name. '</b> your credentials for day-to-day login has been created. <br>
		    			  Username :'. $name .'<br>
						  Password :<b>' . $pass . '</b><br>
						  Happy coding with us, Best of luck..!! ';
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
			
	
		$sql = "INSERT INTO `employee_details`( `name`,`title`,`password`,`email`,`phone`,`city`,`basic_salary`) 
		VALUES ('$name','$title','$pass','$email','$phone','$city','$salary')";

	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode" => 200));
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
}



if (count($_POST) > 0) {
	if ($_POST['type'] == 2) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$title = $_POST['title'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$city = $_POST['city'];
		$salary = $_POST['salary'];


		$sql = "UPDATE `employee_details` SET `name`='$name',`title`='$title',`email`='$email',`phone`='$phone',`city`='$city',`basic_salary`='$salary' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 3) {
		$id = $_POST['id'];
		$sql = "DELETE FROM `employee_details` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 4) {
		$id = $_POST['id'];
		$sql = "DELETE FROM 'employee_details' WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
