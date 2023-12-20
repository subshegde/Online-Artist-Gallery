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
                    <li class="active"><a href="">Buyer Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Buyer Details</h4>
                  
         <!-- Table Options -->
                                  <a href="buyer_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Buy New </a>
                                  <table class="table table-bordered table-hover">
				<thead>
  <tr>
    <th width="19">Sl&nbsp;No</th>
    <th width="40">Name</th>
    <th width="36">Address</th>
    <th width="29">City</th>
    <th width="51">Contact&nbsp;Number</th>
    <th width="50">Email Id</th>
    <th width="74">Work&nbsp;Status</th>
    <th width="74">User Name</th>
    <th width="74">Edit</th>
    <th width="74">Delete</th>
  </tr>
  </thead>
  <tbody
  <?php
  
  include('../db_connection/dbconnect.php');
  
  $sql="select * from  buyer_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
    ?>
 
  <tr>
    <td>&nbsp;<?php echo $row['bid']; ?></td>
    <td>&nbsp;<?php echo $row['bname']; ?></td>
    <td>&nbsp;<?php echo $row['address']; ?></td>
    <td>&nbsp;<?php echo $row['bcity']; ?></td>
    <td>&nbsp;<?php echo $row['cont_no']; ?></td>
    <td>&nbsp;<?php echo $row['email_id']; ?></td>
    <td>&nbsp;<?php echo $row['work_status']; ?></td>
    <td>&nbsp;<?php echo $row['user_name']; ?></td>
    <td><a href="buyer_details_edit.php?bid=<?php echo $row['bid'];?>">edit</a></td>
    <td><a href="buyer_details_delete.php?bid=<?php echo $row['bid']; ?>">delete</a></td>
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
