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

                        <h4>View Material Used Details</h4>
                  
         <!-- Table Options -->
                                  <a href="material_used_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Material Used Details</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th><div align="center"><em><strong>SNo</strong></em></div></th>
      <th><div align="center"><em><strong>Material name </strong></em></div></th>
      <th><div align="center"><em><strong>Quantity</strong></em></div></th>
      <th><div align="center"><em><strong>Used date </strong></em></div></th>
      <th><div align="center"><em><strong>Artist name </strong></em></div></th>
      <th><div align="center"><em><strong>Edit</strong></em></div></th>
      <th><div align="center"><em><strong>Delete</strong></em></div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('dbconnect.php');
	$sl=1;
	$sql="select * from material_used mu,materials_details md,artist_details ad where mu.mid=md.mid and mu.aid=ad.aid";
	
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['material_name'];?></td>
      <td>&nbsp;<?php echo $row['quantity'];?></td>
      <td>&nbsp;<?php echo $row['used_date'];?></td>
      <td>&nbsp;<?php echo $row['aname'];?></td>
	  <td><a href="material_used_edit.php?muid=<?php echo $row['muid'];?>" class="btn btn-primary">Edit</a></td>

	  <td><a href="material_used_delete.php?muid=<?php echo $row['muid'];?>" class="btn btn-danger" onClick="return confirm('Are you sure want to delete?')">Delete</a></td>

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
