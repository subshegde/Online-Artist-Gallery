<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				
            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href=""></a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Paint Upload Details</h4>
                  
         <!-- Table Options -->
                                  <a href="user_paint_upload_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New User Paint Upload</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th><em><strong>SNo</strong></em></th>
      <th><em><strong>User name </strong></em></th>
      <th><em><strong>Paint name </strong></em></th>
      <th><em><strong>Description</strong></em></th>
      <th><em><strong>Paint upload </strong></em></th>
      <th><em><strong>Date</strong></em></th>
      <th><em><strong>Status</strong></em></th>
    
      <th><strong><em>Delete</em></strong></td>
    </tr>
	</thead>
	<tbody>
	
	<?php
	include('dbconnect.php');
	$sl=1;
	$uname=$_SESSION['uname'];
	$sql="select * from user_paint_upload upd,user_details ud where upd.uid=ud.uid and ud.user_name='$uname'";
	
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
	
	
	
    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['user_name'];?></td>
      <td>&nbsp;<?php echo $row['paint_name'];?></td>
      <td>&nbsp;<?php echo $row['paint_description'];?></td>
      <td>&nbsp;<img src="../images/<?php echo $row['paint_upload'];?>" width="213" height="100"</td>
      <td>&nbsp;<?php echo $row['upload_date'];?></td>
      <td>&nbsp;<?php echo $row['upload_status'];?></td>
    
	  <td><a href="user_paint_upload_delete.php?upuid=<?php echo $row['upuid'];?>" class="btn btn-danger" onClick="return confirm('Are you sure want to delete?')">Delete</a></td>

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
</form>
</body>
</html>
