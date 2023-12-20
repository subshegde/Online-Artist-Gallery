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
                    <li class="active"><a href="">Gallery Type Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Gallery Type Details</h4>
                  
         <!-- Table Options -->
                                  <a href="gallery_type_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Art Type</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
				<thead>
<tr>
    <th>Sl No</th>
    <th>Gallery Type Name</th>
    <th>Description</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
   </thead>
  <tbody>
 <?php
  
  include('../db_connection/dbconnect.php');
  $s1=1;
  $sql="select * from  gtype_details ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
    ?>
  <tr>
    <td>&nbsp;<?php echo $s1++; ?></td>
    <td>&nbsp;<?php echo $row['gtype_name']; ?></td>
    <td>&nbsp;<?php echo $row['gt_description']; ?></td>
    <td><a href="gtype_details_edit.php?gallery_type_id=<?php echo $row['gallery_type_id'];?>">edit</a></td>
    <td><a href="gtype_details_delete.php?gallery_type_id=<?php echo $row['gallery_type_id']; ?>">delete</a></td>
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




