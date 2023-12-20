
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
                    <li class="active"><a href="">Gallery view</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Gallery Details</h4>
                  
         <!-- Table Options -->
                <div class="clearfix">
                    
                    <a href="gallery_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Painting </a>
                </div>
                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
  <thead>
   <tr>
    <th>Sl No</th>
    <th>Gallery Name</th>
    <th>Description</th>
    <th>Painting</th>
    <th>Upload Date</th>
    <th>Gellery Type</th>
    <th>Remove</th>
    
  </tr>
  </thead>
  <tbody>
<?php include('dbconnect.php') ?>
<?php
$sl_no=0;
$uname=$_SESSION['uname'];
$sql="select * from gallery_details gd,artist_details ad,gtype_details gt where gd.artistid=ad.aid and gt.gallery_type_id=gd.gallery_type_id and ad.user_name='$uname'";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$sl_no=$sl_no+1;
$Gid=$row['gid'];
?>
  <tr>
    <td>&nbsp;<?php echo $sl_no; ?></td>
    <td>&nbsp;<?php echo $row['Gname'];?></td>
    <td>&nbsp;<?php echo $row['description'];?></td>
    <td>&nbsp;<img src="paint_images/<?php echo $row['upload_paint'];?>" width="200" height="100"></td>
    <td>&nbsp;<?php echo $row['date'];?></td>
    <td>&nbsp;<?php echo $row['gtype_Name'];?></td>
    <td><a href="delete_gallerydetails.php?Gid=<?php echo $row['gid']; ?>" class="btn btn-danger">Remove</a></td>
  </tr>
  <?php
  }
  ?>
  </tbody>
</table>
 </div>

            <!-- END Page Content -->
			
			 <script src="js/helpers/jquery.min.js"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

       
    </body>
</html>
 <?php include('footer.php');  ?>