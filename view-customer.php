<?php include('header.php');?>

  <div class="wrapper ">
    <?php include('sidebar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include('navbar.php');?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
        <div class="content-wrapper">

			<div class="row">
	            <div class="col-lg-12 grid-margin">
	              <div class="card">
	                <div class="card-body">
	                  <h2 class="card-title" style="margin-left: 10px;">View Sellers</h2>
	                  <div class="table-responsive">
	                    <table class="table table-striped" style="border: 1px solid black; margin-left: 10px; border-collapse: collapse;">
							<thead>
								<th>Customer Name</th>
								<th>Contact Number</th>
								<th>GSTIN</th>
								<th>PAN Number</th>
								<th>CIN Number</th>
								<th>Address</th>
								<th>Action</th>
							</thead>
							<?php
							include('sql-connect.php');
							
							$sql = mysqli_query($mysqli,"SELECT * FROM `add_customer`");
							$i=1;
							while ($rowdata = mysqli_fetch_assoc($sql))
							 {
							?>

								<tr>
										<!-- <td><?php echo $i;?></td> -->
										<td><?php echo $rowdata['name'];?></td>
										<td><?php echo $rowdata['contact_no'];?></td>
										<td><?php echo $rowdata['gstin'];?></td>
										<td><?php echo $rowdata['pan_no'];?></td>
										<td><?php echo $rowdata['cin_no'];?></td>
										<td><?php echo $rowdata['address'];?></td>
										<td><a href="edit.php?id=<?= $rowdata['id']?>"><i class="fa fa-pencil-square-o" style="font-size:20px;color:green"></i></a> <a href="delete.php?id=<?= $rowdata['id']?>"><i class="fa fa-trash-o" style="font-size:20px;color:red"></i></a></td>
														
								</tr>
							<?php
							$i++; 
							}
							?>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>


