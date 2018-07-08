<?php include('sql-connect.php');?>
<?php 

	if(isset($_POST['UserFirstName']) && isset($_POST['UserLastName']) && isset($_POST['UserEmail']) && isset($_POST['UserPassword'])){ #submit is the name of the button

		$fname = $_POST['UserFirstName'];
		$lname = $_POST['UserLastName'];
		$email = $_POST['UserEmail'];
		$uname = $_POST['userUserName'];
		$password = $_POST['UserPassword'];
		$confirm = $_POST['UserConfirm'];
		
		if($password === $confirm){
			$sql_entry = mysqli_query($mysqli, "INSERT INTO `user_data`(`fname`, `lname`, `email`, `uname`, `password`) VALUES ('$fname','$lname','$email','$uname','$password')");
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