<?php
session_start();
if(isset( $_SESSION['user'] ))
	{
		header('Location: ../index.php');
		exit();
	}
?>
	

<?php
	require ('php/connection.php');
	echo $_SESSION['userID'];
	$stmt = $conn->prepare("INSERT INTO Photo (PhotoLink, Description,UserID) VALUES (?, ?,?)");
	$stmt->bind_param("ssi",$photolink,$description,$userID );
	#$photolink = $_POST['photolink'];
	$title = NULL; #$_POST['title'];
	$description = $_POST['desc'];
	$category = NUll;#$_POST['category'];
	$likes = NULL;#$_POST['likes'];
	$userID = $_SESSION['userID'] ;
	
	

?>


<?php
   if(isset($_FILES['photo'])){
      $errors= array();
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         #$errors[]='File size must be less 2 MB';
		 echo "file size must be less than 2MB";
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".time().$file_name);
		 $photolink = "uploads/".time().$file_name;
		 if($stmt->execute()){
			echo "added successfully";
			}
			else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		$stmt->close();
         #echo "Success";
		 header('Location: home.php');
      }else{
         print_r($errors);
      }
   }
   	
?>