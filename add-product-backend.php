<?php include('sql-connect.php');

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	$is_success = 0;
	foreach ($_POST['mat_code'] as $key => $matcode) {
		// fetching of individual row data
		$supplierName = $_POST['SupplierName'];
		$orderNumber = $_POST['OrderNumber'];
		$date = $_POST['InputDate'] ;
		$piNumber = $_POST['PINumber'];
		$invoiceNumber = $_POST['InvoiceNumber'];
		$placeOfSupply = $_POST['PlaceOfSupply'];
		$mat_code = $_POST['mat_code'][$key];
		$mat_des = $_POST['mat_des'][$key];
		$hsn_code = $_POST['hsn_code'][$key];
		$cgst = $_POST['cgst'][$key];
		$sgst = $_POST['sgst'][$key];
		$igst = $_POST['igst'][$key];
		$quantity = $_POST['quantity'][$key];
		$rate = $_POST['rate'][$key];
		$amount = $_POST['amount'][$key];
		$tax_cost = $_POST['tax_cost'][$key];

		// //Inserting individual row data into DB
		// if(Insert_query){
		// 	$is_success ++;
		// }
		
	}
	$sql_entry = mysqli_query($mysqli, "INSERT INTO `add_product`(`supplier_name`, `order_number`, `date`, `p_i_number`, `invoice_number`, `place_of_supply`, `mat_code`, `mat_des`, `hsd_code`, `cgst`, `sgst`, `igst`, `quantity`, `rate`, `amount`, `total_cost`) VALUES ('$supplierName','$orderNumber','$date','$piNumber','$invoiceNumber','$placeOfSupply','$mat_code','$mat_des','$hsn_code','$cgst','$sgst','$igst','$quantity','$rate','$amount','$tax_cost')");
			if($sql_entry){
				echo "New Product Added";
				$is_success ++;
				
			}
			else {
					echo "Error: " .$sql_entry. "<br>" . $mysqli->error;
				}
	//check if all rows inserted
	if(count($_POST['mat_code']) == $is_success){
		echo "All rows have been inserted";
	}else{
		echo "Something went wrong"
	}
	exit;
?>

