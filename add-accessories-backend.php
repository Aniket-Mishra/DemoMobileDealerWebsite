<?php include('sql-connect.php');

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	$is_success = 0;
	// use for loop instead and use the count function to get the length of the array and then run it
	foreach ($_POST['company_name'] as $key => $company_name) {
		// fetching of individual row data
		$company_name = $_POST['company_name'][$key];
		$model_number = $_POST['model'][$key];
		$hsn_code = $_POST['hsn_code'][$key];
		$quantity = $_POST['quantity'][$key];
		$rate = $_POST['rate'][$key];
		$discount = $_POST['discount'][$key];
		$amount = $_POST['amount'][$key];
		$total = $_POST['total_amount'][$key];

		// //Inserting individual row data into DB
		// if(Insert_query){
		// 	$is_success ++;
		// }
		$sql_entry = mysqli_query($mysqli,"INSERT INTO `add_accessories`(`company_name`, `model`, 'hsn_code', `quantity`, `rate`, `amount`, `total_amount`) VALUES ('$company_name','$model_number', '$hsn_code', $quantity','$rate','$amount','$total')");
			if($sql_entry){
				echo "New Accessory Added";
				//$is_success ++;
				
			}
			else {
					echo "Error: "; //.$sql_entry. "<br>" . $mysqli->error;
				}
		
	}
	
	//check if all rows inserted
	// if(count($_POST['company_name']) == $is_success){
	// 	echo "All rows have been inserted";
	// }
	// else{
	// 	echo "Something went wrong"
	// }
	
?>

