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
                    <li class="active"><a href="">Payment Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Payment Details</h4>
                  
         <!-- Table Options -->
                                  <a href="payment_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Payment</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
				<thead>
  <tr>
    <th width="19">Sl&nbsp;No</th>
    <th width="18">User&nbsp;Name</th>
    <th width="18">Gallery&nbsp;Name</th>
    <th width="70">Bank Name</hd>
    <th width="22">Amount</th>
    <th width="42">Date</th>
    <th width="72">Status</th>
    <th width="72">Edit</th>
    <th width="72">Delete</th>
  </tr>
  </thead>
  <tbody>
 <?php
  
  include('../db_connection/dbconnect.php');
  $sl=1;
  $sql="select * from payment_details pd, user_details ud, gallery_details gd where pd.uid=ud.uid and pd.gid=gd.gid";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
    ?>
  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<?php echo $row['firstname']; ?></td>
    <td>&nbsp;<?php echo $row['gname']; ?></td>
    <td>&nbsp;<?php echo $row['bank_name']; ?></td>
    <td>&nbsp;<?php echo $row['amt']; ?></td>
    <td>&nbsp;<?php echo $row['pdate']; ?></td>
    <td>&nbsp;<?php echo $row['p_status']; ?></td>
    <td><a href="payment_details_edit.php?tid=<?php echo $row['tid'];?>">edit</a></td>
    <td><a href="payment_details_delete.php?tid=<?php echo $row['tid'];?>">delete</a></td>
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



