<?php include('sql-connect.php');?>
<?php 

	if(isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['InputEmail']) && isset($_POST['Password'])){ #submit is the name of the button

		$fname = $_POST['FirstName'];
		$lname = $_POST['LastName'];
		$email = $_POST['InputEmail'];
		$uname = $_POST['UserName'];
		$password = $_POST['Password'];
		$confirm = $_POST['ConfirmPassword'];
		
		if($password === $confirm){
			$sql_entry = mysqli_query($mysqli, "INSERT INTO `signup`(`fname`, `lname`, `email`, `uname`, `password`) VALUES ('$fname','$lname','$email','$uname','$password')");
			if($sql_entry){
				echo "New Record Created";
				
			}
			else {
					echo "Error: " .$sql_entry. "<br>" . $mysqli->error;
				}
		}
		else{
			echo "Passwords do not match";
		}	

		
		#header("Location: index.php?mailsend");


	}else{
			echo "Please provide valid informations";
		}




 ?>