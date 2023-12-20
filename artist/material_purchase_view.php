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

                        <h4>View Material Purchase</h4>
                  
         <!-- Table Options -->
                                  <a href="material_purchase_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Material Purchase</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th><div align="center"><em><strong>SNo</strong></em></div></th>
      <th><div align="center"><em><strong>Material name </strong></em></div></th>
      <th><div align="center"><em><strong>Purchase Rate </strong></em></div></th>
      <th><div align="center"><em><strong>Purchase Date</strong></em></div></th>
      <th><div align="center"><em><strong>Artist name </strong></em></div></th>
      <th><div align="center"><em><strong>Edit</strong></em></div></th>
      <th><div align="center"><em><strong>Delete</strong></em></div></th>
    </tr>
	</thead>
	<tbody>
	
	
	<?php
	include('dbconnect.php');
	$sl=1;
	$uname=$_SESSION['uname'];
	$sql="select * from material_purchase mp,materials_details md,artist_details ad where mp.mid=md.mid and mp.aid=ad.aid and ad.user_name='$uname'";
	
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
	
	
    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['material_name'];?></td>
      <td>&nbsp;<?php echo $row['material_purchase_rate'];?></td>
      <td>&nbsp;<?php echo $row['material_purchase_date'];?></td>
      <td>&nbsp;<?php echo $row['aname'];?></td>
	  <td><a href="material_purchase_edit.php?mpid=<?php echo $row['mpid'];?>" class="btn btn-primary">Edit</a></td>

	  
      <td><a href="material_purchase_delete.php?mpid=<?php echo $row['mpid'];?>" class="btn btn-danger" onClick="return confirm('Are you sure want to delete?')">Delete</a></td>

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
