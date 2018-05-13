<?php
	require ('connection.php');
	if($_POST['password']==$_POST['cpassword']){
		$stmt = $conn->prepare("INSERT INTO User (Firstname, Lastname, Username,Email,Phone,Password) VALUES (?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssis",$firstname,$lastname,$un,$email,$phone,$encrypted_password );
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$un = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pw = $_POST['password'];
		$encrypted_password = sha1( $pw );
		
		
			if($stmt->execute()){
				header('Location: ../home.php');
				#echo "Registered Succsessfully";
			}
			else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		$stmt->close();
	}
	else{
		echo "Password mismatch";
	}
?>
