<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				<style>








hr {
  margin: 20px;
  border: none;
  border-bottom: thin solid rgba(255,255,255,.1);
}

div.title { font-size: 2em; }

h1 span {
  font-weight: 300;
  color: #Fd4;
}

div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
.my-custom-scrollbar {
position: relative;
height: 500px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>
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
         <!--                               <a href="ratings_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Rating Details</a> -->
                </div>
                <!-- END Table Options -->
<div class="table-wrapper-scroll-y my-custom-scrollbar">				
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

 $sql="select * from gallery_details gd,gtype_details gt where gd.gallery_type_id=gt.gallery_type_id";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$g_id=$row['gid'];



 

?>
	
  <tr>
<?php 
 $sql1="select * from Ratings r,gallery_details gd where r.gid=gd.gid and r.gid='$g_id'";
$res1=$conn->query($sql1);
$row1=mysqli_fetch_array($res1);

$sl_no=$sl_no+1;
$Rid=$row1['rid'];
 $ratings=$row1['ratings']; ?>
    <td>&nbsp;<?php echo $row['Gname'];?></td>
	<td>&nbsp; <img src="../artist/paint_images/<?php echo $row['upload_paint'];?>" width="200" height="200" alt="image">
	<p>&nbsp;</p>
	 <div class="progress progress-striped progress-danger active">
       <div class="bar" style="width: <?php echo $ratings; ?>px">(<?php echo $ratings; ?>) Rating..</div>
        </div>	</td>
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
			
		
<?php include("footer.php"); ?>
