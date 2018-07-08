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
			    	<div class="card-header">Add a Seller</div>
			    	<div class="card-body">
			        	<form id="addseller" method="post" action="add-seller-backend.php">
			         		<div class="form-group">
			            		<div class="form-row">
			            			<div class="col-md-6">
			            				<label for="exampleSupplierName">Supplier name</label>
			                			<input class="form-control" id="SupplierName" name="SupplierName" type="text" aria-describedby="nameHelp" placeholder="Enter supplier name" required>
			            			</div>
			            			<div class="col-md-6">
						                <label for="exampleContactNumber">Contact Number</label>
						                <input class="form-control" id="ContactNumber" name="ContactNumber" type="text" aria-describedby="contactHelp" placeholder="Enter Contact Number" required>
			              			</div>
			            		</div>
			          		</div>
					        <div class="form-group">
					          	<div class="form-row">
					            <div class="col-md-6">
					           		<label for="exampleGSTIN">GSTIN</label>
					           		 <input class="form-control" id="GSTIN" name="GSTIN" type="GSTIN" aria-describedby="GSTINHelp" placeholder="State Code - PAN - Entity Code - Z - Cheque Sum Digit" required>
					        	</div>
					    		<div class="col-md-6">
						            <label for="examplePANNumber">PAN Number</label>
						            <input class="form-control" id="PANumber" name="PANumber" type="text" aria-describedby="PANHelp" placeholder="Enter PAN Number" required>
					            </div>
					        </div>
					   		</div>
				        	<div class="form-group">
				            	<div class="form-row">
				            		<div class="col-md-6">
						                <label for="exampleCINNumber">CIN Number</label>
						                <input class="form-control" id="CINNumber" name="CINNumber" type="text" placeholder="Enter CIN number" required>
				            		</div>
				                	<div class="col-md-6">
						                <label for="exampleAddress">Address</label>
						                <input class="form-control" id="Address" name="Address" type="text" placeholder="Enter Address" required>
				              		</div>
				            	</div>
				            </div>
				          
			            <button type="button" class="btn btn-primary" id="submit" name="submit">Add Seller</button>
			            <button type="reset" class="btn btn-primary">Cancel</button><br>
			        </form>
			      </div>
			    </div>
			  </div>
			  <!-- Bootstrap core JavaScript-->
			  <script src="vendor/jquery/jquery.min.js"></script>
			  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			  <!-- Core plugin JavaScript-->
			  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
			  <script>

			    $(document).ready(function(){
			      var addSeller = $('#addseller');

			      $('#submit').on('click',function(){
			            
			        $.ajax({
				        type: addSeller.attr('method'),
				        url:  addSeller.attr('action'),
				        data: addSeller.serialize(),    
			            success: function (data) {
			                    	alert(data);
			                      $('#addseller')[0].reset();
			                  },
			                 error: function (data) {
			                    alert('An error occurred.');
			                },
			        
			        });
			      });
			    });

			  </script>

    	</div>
        <!-- ROW ENDS -->
    </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
    <?php include('footer.php');?>
