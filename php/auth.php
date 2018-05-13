<?php
session_start();
if(!isset( $_SESSION['user'] ))
	{
		header('Location: ../index.php');
		exit();
	}
?>

<?php
	require('connection.php');
?>

<?php
	$un = $_POST['username'];
	$pw = $_POST['password'];
	$encrypted_password = sha1( $pw );
	$sql = "SELECT * FROM User WHERE Username='$un' AND Password='$encrypted_password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$_SESSION['user'] = $row["Firstname"];
			$_SESSION['userID'] = $row["UserID"];
			#echo "user id is:".$_SESSION['userID'] ;
			#echo "user  is:".$_SESSION['user'] ;
			
		}
				
		header('Location: ../home.php');
		

	
    // output data of each row
	}
	else {
			echo "error occured.";
		}
	$conn->close();
?>
