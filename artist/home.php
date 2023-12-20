<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				      <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>         <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> WelCome to Online Artist Gallery<br><small>All the elements you need!</small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Dashboard</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">General</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Wel Come To Artist : <?php echo $_SESSION['uname'];?> </h4>
                    </div>
                    <!-- END General Forms Title -->



<div class="row">
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
  <div class="column">
    <img src="paint_images/<?php echo $row['upload_paint'];?>" >
  </div>
 
 <?php
 }
 ?>
</div>

                    <!-- General Forms Content -->
                    <div class="block-content">



  </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php');  ?>
