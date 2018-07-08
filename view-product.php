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
                <th>Seller Name</th>
                <th>Invoice Number</th>
                <th>company Name</th>
                <th>Model Numver</th>
                <th>HSN coder</th>
                <th>Quantity</th>
                <th>Stock Used</th>
                <th>Stock Available</th>
                <th>Action</th>
              </thead>
              <?php
              include('sql-connect.php');
              
              $sql = mysqli_query($mysqli,"SELECT * FROM `add_product`");
              $i=1;
              while ($rowdata = mysqli_fetch_assoc($sql))
               {
              ?>

                <tr>
                    <!-- <td><?php echo $i;?></td> -->
                    <td><?php echo $rowdata['supplier_name'];?></td>
                    
                    <td><?php echo $rowdata['invoice_number'];?></td>
                    
                    <td><?php echo $rowdata['mat_code'];?></td>
                     <td><?php echo $rowdata['mat_des'];?></td>
                    <td><?php echo $rowdata['hsd_code'];?></td>
                    <td><?php echo $rowdata['quantity'];?></td>
                    <td><!-- <?php //echo $rowdata['supplier_name'];?> -->Stock used 0</td>                    
                    <td><!-- <?php //echo $rowdata['supplier_name'];?> -->Stock avail quantity-stock used</td>
                   
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


