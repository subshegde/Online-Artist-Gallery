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

                        <h4>View Material Details</h4>
                  
         <!-- Table Options -->
                                  <a href="material_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Gallery Details</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th width="106"><div align="center"><em><strong>Sno</strong></em></div></th>
      <th width="320"><div align="center"><em><strong>Material Name </strong></em></div></th>
      <th width="213"><div align="center"><em><strong>Material Description </strong></em></div></th>
      <th width="213"><div align="center"><em><strong>Edit</strong></em></div></th>
      <th width="214"><div align="center"><em><strong>Delete</strong></em></div></td>
    </tr>
	</thead>
	<tbody>
	
	
	<?php
	 include('dbconnect.php'); 
	$sl=1;
	$sql="select * from materials_details";
	
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['material_name'];?></td>
      <td>&nbsp;<?php echo $row['material_description'];?></td>
      <td><a href="material_details_edit.php?mid=<?php echo $row['mid'];?>" class="btn btn-primary">Edit</a></td>
	  <td><a href="material_details_delete.php?mid=<?php echo $row['mid'];?>" class="btn btn-danger" onClick="return confirm('Are you sure want to delete?')">Delete</a></td>

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
