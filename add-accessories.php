<?php include('header.php');?>

  <div class="wrapper ">
    <?php include('sidebar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include('navbar.php');?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
			<div class="container">
			    <div class="card card-register mx-auto mt-5">
			    	<div class="card-header">Add a product</div>
			    	<div class="card-body">
			        	<form id="addAccessories" method="post" action="add-accessories-backend.php">       
				            	<div class="no-wrap table-align">
									<table id="POITable"  data-toggle="table" style="background-color: white; color: black" >
										<thead>
										<tr>
											<th>ID</th>
											<th>Company Name</th>
											<th>Model No</th>
											<th>HSN Code</th>
											<th>Quantity</th>
											<th>Rate/Each</th>
											<th>discount</th>
											<th>Amount</th>
											<th>Total Amount</th>
											<th>Action</th>
										</tr>
										</thead>
										<tbody >
											<div class="container">
												<div class="rows">
													<tr class="table-align" id="row-1">
													<td><input type="text" style="text-align:center;width:40px;background-color: white;color:black;" name="sl_no[]" value="1" readonly></td>
													<td><input type="text" class="add-prod-table" name="company_name[]" ></td>
													<td><input type="text" class="add-prod-table" name="model[]" ></td>
													<td><input type="text" class="add-prod-table" name="hsn_code[]"  ></td>
													
													<td><input type="number" class="add-prod-table quantity_cls amount-calc-0 calc" name="quantity[]" id="quantity-0"></td>
													<td><input type="number" class="add-prod-table rate_cls amount-calc-0"  id="rate-0" name="rate[]"></td>
													<td><input type="number" class="add-prod-table discount_cls-0"  id="discount-0" name="discount[]" value="0"></td>
													<td><input type="text" class="add-prod-table amount_cls"  id="amount-0" name="amount[]" value="" readonly></td>
													<td><input type="text" class="add-prod-table total-amount-cls"  name="total_amount[]" id="total_amount-0" value="" readonly></td>
													<td class="text-nowrap"><button id="addrow"> <i class="fa fa-pencil text-inverse m-r-10"></i> </button> </td>
													</tr>
													<tr class="add_tr"></tr>
												</div>
											</div>
										</tbody>
									</table>
								</div>
				           
			            <button type="submit" class="btn btn-primary" id="submit">Add Product</button>
			            <button type="reset" class="btn btn-primary">Cancel</button><br>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

			  <!-- Bootstrap core JavaScript-->
			  <script src="vendor/jquery/jquery.min.js"></script>
			  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			  <!-- Core plugin JavaScript-->
			  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
			  <script>
			  	function deleteRow(row)
					{
					    var i=row.parentNode.parentNode.rowIndex;
					    document.getElementById('POITable').deleteRow(i);
					    i--;
					}


			    $(document).ready(function(){
			      var addAccessories = $('#addAccessories');

			      $('#submit').click(function(){
			         // event.preventDefault();
			        $.ajax({
			            type: addProduct.attr('method'),
			            url:  addProduct.attr('action'),
			            data: addProduct.serialize(),
			            success: 	function (data) {
			                    		// alert('Product added');
			                    		// $('#addProd')[0].reset();
			                    		alert(data);
			                    	},
			            error: function (data) {
			                    	alert('An error occurred.');
			            },
			        });
			      });


			      $('.amount-calc-0').keyup(function(){
			    		
		    		var quantity = $('#quantity-0').val();
		    		var rate = $('#rate-0').val();
		    		var amount = parseInt(quantity) * parseInt(rate);
		    		var amount_1 = isNaN(amount) ? '0' : amount;
		    		$('#amount-0').val(amount_1);

			 	  });
			    	

			      $('.discount_cls-0').keyup(function(){
				    		
		    		var discount = $('#discount-0').val();
		    		var amount = $('#amount-0').val();
		    		var final = parseInt(amount) - parseInt(((amount*discount)/100));
		    		var final_cost = isNaN(final) ? '0' : final;
		    		$('#total_amount-0').val(final_cost);
				    		

			      });

			    	var i = 0;
  					$("#addrow").click(function(event){
     					
  						event.preventDefault();
  						var id = i;
  						i++;
  						$('#add_tr').replaceWith('');
  						$('.add_tr').replaceWith('<tr class="table-align" id="row-'+i+'"><td><input type="text" style="text-align:center;width:40px;background-color: white;color:black;" name="sl_no[]" value="'+(i+1)+'" readonly ></td><td><input type="text" class="add-prod-table" name="company_name[]" ></td><td><input type="text" class="add-prod-table" name="model[]" ></td><td><input type="text" class="add-prod-table" name="hsn_code[]"  ></td><td><input type="number" class="add-prod-table quantity_cls amount-calc" name="quantity[]" id="quantity-'+i+'"></td><td><input type="number" class="add-prod-table rate_cls amount-calc"  id="rate-'+i+'" name="rate[]"></td><td><input type="number" class="add-prod-table discount_cls"  id="discount-'+i+'" name="discount[]" value="0"></td><td><input type="text" class="add-prod-table amount_cls"  id="amount-'+i+'" name="amount[]" value="" readonly></td><td><input type="text" class="add-prod-table total-amount-cls"  name="total_amount[]" id="total_amount-'+i+'" value="" readonly></td><td class="text-nowrap"> <button onClick="deleteRow(this);" id="row-'+i+'"> <i class="fa fa-close  text-danger"></i> </button> </td></tr><tr class="add_tr"></tr>');
  							
  					
			    		$('.amount-calc').keyup(function(){
			    			var id =  $(this).attr('id').split('-').pop();
			    			
				    		var quantity = $('#quantity-'+id).val();
				    		  var rate = $('#rate-'+id).val();
				    		 var amount = parseInt(quantity) * parseInt(rate);
				    		  var amount_1 = isNaN(amount) ? '0' : amount;
				    		 $('#amount-'+id).val(amount_1);

			    		});

			    		$('.discount_cls').keyup(function(){
				    		var id =  $(this).attr('id').split('-').pop();
				    		var discount = $('#discount-'+id).val();
				    		var amount = $('#amount-'+id).val();
				    		var final = parseInt(amount) - parseInt(((amount*discount)/100));
				    		var final_cost = isNaN(final) ? '0' : final;
				    		$('#total_amount-'+i).val(final_cost);
				    		

			    		});

			        });
     				
			    });

			  </script>

    	</div>
        <!-- ROW ENDS -->
    </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
    <?php include('footer.php')?>
    </div>
    
  </div>
 <?php include('bottom.php');?>
 </html>