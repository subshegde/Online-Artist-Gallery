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
                    <li class="active"><a href="">Rating Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Rating Details</h4>
                  
         <!-- Table Options -->
                <div class="clearfix">
                                        <a href="ratings_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Rating Details</a>
                </div>
                <!-- END Table Options -->
				<p>Ratings Details</p>
<table class="table table-bordered table-hover">
 <thead>
<tr>
   
    <th>Gallery Name </th>
	<th>Gallery Image </th>
    <th>&nbsp;</th>
   
  </tr>
</thead>
<tbody>  
<?php include('dbconnect.php') ?>

<?php
$sl_no=0;

$sql="select * from Ratings r,gallery_details gd where r.gid=gd.gid";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$sl_no=$sl_no+1;
$Rid=$row['rid'];
 $ratings=$row['ratings'];
 

?>
  <tr>

    <td>&nbsp;<?php echo $row['Gname'];?></td>
	<td>&nbsp; <img src="../artist/paint_images/<?php echo $row['upload_paint'];?>" width="200" height="200" alt="image">
	<p>&nbsp;</p>
	 <div class="progress progress-striped progress-danger active">
       <div class="bar" style="width: <?php echo $ratings; ?>px">(<?php echo $ratings; ?>) Rating..</div>
        </div>
	</td>
    
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
            <!-- END Page Content -->
			
		
<?php include("footer.php"); ?>
