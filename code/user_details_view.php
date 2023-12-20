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
                    <li class="active"><a href="">User Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View User Details</h4>
                  
         <!-- Table Options -->
                                  <a href="user_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New User</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
	<thead>
  <tr>
    <th>Sl&nbsp;No</th>
    <th>First&nbsp;Name</th>
    <th>Last&nbsp;Name</th>
    <th>Address</th>
    <th>Contact&nbsp;Number</th>
    <th>Email Id</th>
    <th>Passward</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
<?php
  
  include('../db_connection/dbconnect.php');
  $s1=1;
  $sql="select * from  user_details  ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
    ?>
  <tr>
    <td>&nbsp;<?php echo $s1++; ?></td>
    <td>&nbsp;<?php echo $row['firstname']; ?></td>
    <td>&nbsp;<?php echo $row['lastname']; ?></td>
    <td>&nbsp;<?php echo $row['address']; ?></td>
    <td>&nbsp;<?php echo $row['contno']; ?></td>
    <td>&nbsp;<?php echo $row['email_id']; ?></td>
    <td>&nbsp;<?php echo $row['user_name']; ?></td>
    <td><a href="user_details_edit.php?uid=<?php echo $row['uid'];?>">edit</a></td>
    <td><a href="user_details_delete.php?uid=<?php echo $row['uid']; ?>">delete</a></td>
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




