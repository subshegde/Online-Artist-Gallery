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
                    <li class="active"><a href="">Gallery Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Gallery Details</h4>
                  
         <!-- Table Options -->
                                  <a href="gallery_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Art</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
				<thead>
  <tr>
    <th>Sl No</th>
    <th>Gallery Name</th>
    <th>Description</th>
    <th>Artist Name</th>
    <th>Upload Paint</th>
    <th>Date</th>
    <th>Gallery Type Name</th>
    <th>Price</td>
    <th>Status</td>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
     <?php
  
  include('../db_connection/dbconnect.php');
  $sl=1;
  $sql="select * from gallery_details gd,artist_details ad,gtype_details gt where gd.artist_id=ad.aid and gd.gallery_type_id=gt.gallery_type_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
    ?>

  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<?php echo $row['gname']; ?></td>
    <td>&nbsp;<?php echo $row['description']; ?></td>
    <td>&nbsp;<?php echo $row['aname']; ?></td>
    <td>&nbsp;<?php echo $row['upload_paint']; ?></td>
    <td>&nbsp;<?php echo $row['g_date']; ?></td>
    <td>&nbsp;<?php echo $row['gtype_name']; ?></td>
    <td>&nbsp;<?php echo $row['price']; ?></td>
    <td>&nbsp;<?php echo $row['status']; ?></td>
    <td><a href="gallery_details_edit.php?gid=<?php echo $row['gid'];?>">edit</a></td>
    <td><a href="gallery_details_delete.php?gid=<?php echo $row['gid'];?>">delete</a></td>
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



