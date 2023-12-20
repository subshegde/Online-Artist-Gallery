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
                    <li class="active"><a href="">Ratings Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Ratings Details</h4>
                  
         <!-- Table Options -->
                                  <a href="ratings_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Ratings</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
	<thead>
   <tr>
    <th width="17">Sl&nbsp;no</th>
    <th width="18">Gallery Name</th>
    <th width="39">Ratings</th>
    <th width="22">Edit</th>
    <th width="22">Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  
  include('../db_connection/dbconnect.php');
  $sl=1;
  $sql="select * from  ratings r , gallery_details gd where r.gid=gd.gid";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
    ?>
  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<?php echo $row['gname']; ?></td>
    <td>&nbsp;<?php echo $row['ratings']; ?></td>
    <td><a href="ratings_edit.php?rid=<?php echo $row['rid'];?>">edit</a></td>
    <td><a href="ratings_details_delete.php?rid=<?php echo $row['rid']; ?>">delete</a></td>
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




