<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				
            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.php"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">Bank Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Bank Details</h4>
                  
         <!-- Table Options -->
                                  <a href="bank_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Bank Details</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
				<thead>
				 <tr>
    <th width="49">Sl No</th>
    <th width="65">User Name</th>
    <th width="50">Card Number</th>
    <th width="47">Pin </th>
    <th width="47">Edit</th>
    <th width="47">Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  
  include('../db_connection/dbconnect.php');
  $s1=1
  $sql="select * from bank_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
    ?>
  
  <tr>
    <td>&nbsp;<?php echo $s1++; ?></td>
    <td>&nbsp;<?php echo $row['user_name']; ?></td>
    <td>&nbsp;<?php echo $row['card_no']; ?></td>
    <td>&nbsp;<?php echo $row['pin_no']; ?></td>
	<td><a href="bank_details_edit.php?bank_id=<?php echo $row['bank_id'];?>">edit</a></td>
	<td><a href="bank_details_delete.php?bank_id=<?php echo $row['bank_id']; ?>">delete</a></td>
  </tr>
  <?php
  }
  ?>
  </tbody>
</table>
</div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
<?php include('footer.php');  ?>



