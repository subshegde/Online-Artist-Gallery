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

                        <h4>View Gallery Details</h4>
                  <div class="clearfix">
         <!--                               <a href="ratings_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Rating Details</a> -->
                </div>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">				
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
	<th>Price</th>
    <th>Delete</th>

  </tr>
  </thead>
  <tbody>
  <?php include('dbconnect.php') ?>
<?php 
$s1=1;
$sql="select * from Gallery_Details g ,artist_details a,gtype_details gt where g.artistId=a.aid and g.gallery_type_id=gt.gallery_type_id";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$Gid=$row["gid"];
?> 
  <tr>
    <td>&nbsp;<?php echo  $s1++; ?></td>
    <td>&nbsp;<?php   echo $row['Gname']; ?></td>
    <td>&nbsp;<?php   echo $row['description']; ?></td>
    <td>&nbsp;<?php  echo $row['aname']; ?></td>
    <td>&nbsp;<img src="../artist/paint_images/<?php   echo $row['upload_paint']; ?>" width="180" height="100"></td>
    <td>&nbsp;<?php   echo $row['date']; ?></td>
    <td>&nbsp;<?php   echo $row['gtype_Name']; ?></td>
	<td>&nbsp;<?php   echo $row['price']; ?></td>
    <td><a href="delete_gallerydetails.php?Gid=<?php echo  $Gid; ?>">delete</a></td>

  </tr>
  <?php
  }
  ?>
  </tbody>
</table>
</div>
   </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php');  ?>
