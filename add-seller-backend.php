<?php 
include('sql-connect.php');


	

		$supplier_name = $_POST['SupplierName'];
		$contact_no = $_POST['ContactNumber'];
		$GSTIN = $_POST['GSTIN'];
		$PANumber = $_POST['PANumber'];
	 	$CINNumber = $_POST['CINNumber'];
		$Address = $_POST['Address'];
		if($supplier_name != NULL && $contact_no != NULL && $GSTIN != NULL && $PANumber != NULL && $CINNumber != NULL && $Address != NULL){
				$query = "INSERT INTO `add_seller`(`supplier_name`, `contact_number`, `gstin`, `pan_no`, `cin_no`, `address`) VALUES ('$supplier_name','$contact_no','$GSTIN','$PANumber','$CINNumber','$Address')";
				$sql_entry = mysqli_query($mysqli, $query);
					if($sql_entry){
						echo "New seller added";
						
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