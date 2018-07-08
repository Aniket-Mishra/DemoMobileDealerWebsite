<?php 
include('sql-connect.php');


	

		$customer_name = $_POST['CustomerName'];
		$contact_no = $_POST['ContactNumber'];
		$GSTIN = $_POST['GSTIN'];
		$PANumber = $_POST['PANumber'];
	 	$CINNumber = $_POST['CINNumber'];
		$Address = $_POST['Address'];
		if($customer_name != NULL && $contact_no != NULL && $GSTIN != NULL && $PANumber != NULL && $CINNumber != NULL && $Address != NULL){
				$query = "INSERT INTO `add_customer`(`name`, `contact_no`, `pan_no`, `gstin`, `cin_no`, `address`) VALUES ('$customer_name', '$contact_no', '$PANumber', 'GSTIN', '$CINNumber', '$Address')";
				$sql_entry = mysqli_query($mysqli, $query);
					if($sql_entry){
						echo "New Customer Added";
						
					}
					else {
							echo "Error: " .$sql_entry. "<br>" . $sql_connect->error;
						}
		}
		else
			echo "Enter all fields!";
		//echo $supplier_name;
	
	// else{
	// 	echo "Check if it goes in here xD";
	// }
?>