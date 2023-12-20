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
                    <li class="active">Gallery Category </li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Gallery Category Details</h4>
                  
         <!-- Table Options -->
                                  <a href="gtype_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Category</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
  <thead>
  <tr>
    <th width="22">Sl No</th>
    <th width="73">Gallery Category Name</th>
    <th width="66">Description</th>
	<th width="66">Edit</th>
	<th width="66">Delete</th>
    
  </tr>
  </thead>
  <tbody>
<?php include('dbconnect.php') ?>
<?php
$sql="select * from gtype_details";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$Gid=$row["gallery_type_id"];
?>
  <tr>
    <td>&nbsp;<?php echo $Gid; ?></td>
    <td>&nbsp;<?php echo $row["gtype_Name"]; ?></td>
    <td>&nbsp;<?php echo $row["description"]; ?></td>
	<td>&nbsp;<a href="edit_gtypef.php?Gid=<?php echo $Gid; ?>">Edit</a></td>
	<td>&nbsp;<a href="delete_gtype_details.php?Gid=<?php echo $Gid; ?>">Delete</a></td>
    
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
