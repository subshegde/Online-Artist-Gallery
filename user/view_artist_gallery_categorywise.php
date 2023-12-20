<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				<?php error_reporting(); ?>
            <!-- Page Content -->
            <div id="page-content">
			<div class="table-wrapper-scroll-y my-custom-scrollbar">	
               <!-- Products List Block -->
                <div class="block block-themed block-last">
                    <!-- Products List Title -->
                    <div class="block-title">
                        
                        <h4><i class="icon-asterisk"></i> Showing Artist Gallery Products</h4>
                    </div>
                    <!-- END Products List Title -->

                    <!-- Products List Content -->
                    <div class="block-content">
                        <div class="row-fluid row-items">
                            <div class="span3">
							
                                <!-- Categories Menu Block -->
                                <div class="block">
                                    <!-- Categories Menu Title -->
                                    <div class="block-title">
                                        <h4>Gallery Categories</h4>
                                    </div>
									
                                    <!-- END Categories Menu Title -->
  								<?php include('dbconnect.php') ?>
                                    <!-- Categories Menu Content -->
                                    <div class="block-content full">
                                        <ul class="nav nav-pills nav-stacked remove-margin">
										<?php
							$sql="select * from gtype_details";
							$res=$conn->query($sql);
							while($row=mysqli_fetch_array($res))
								{
								?>
                                            
                                            <li><a href="view_artist_gallery_categorywise.php?gt_id=<?php echo $row['gallery_type_id'];?>"><?php echo $row['gtype_Name'];?></a></li>
                                            <?php
											}
											?>
                                        </ul>
                                    </div>
                                    <!-- END Categories Menu Content -->
                                </div>
                                <!-- END Categories Menu Block -->

                                </div>
                                <!-- END Filters #1 Block -->

                               
                            <div class="span9">
  
  
                               
								<?php
								$gt_id=$_REQUEST['gt_id'];
							$sql2="select * from Gallery_Details gd,gtype_details gt,artist_details ad where gd.gallery_type_id=gt.gallery_type_id and gd.artistid=ad.aid and gd.status='new' and gd.gallery_type_id='$gt_id'";
							$res2=$conn->query($sql2);
							while($row2=mysqli_fetch_array($res2))
								{
							$Gid=$row2['gid'];
							$gname=$row2['Gname'];
							$price=$row2['price'];
							?>                           
							  <div class="media media-hover">
   
                                   <a href="javascript:void(0)" class="pull-left">
                                        <img src="../artist/paint_images/<?php echo $row2['upload_paint'];?>" width="160" height="120" class="media-object img-rounded" alt="Image">
                                    </a>
                                    <div class="media-body">
                                        <div class="pull-right">
                                            <h4 class="sub-header text-black text-right">Price <?php echo $row2['price'];?></h4>
                                            <a href="#" class="btn btn-warning"><i class="icon-shopping-cart"></i> <?php echo $row2['gtype_Name'];?></a>
                                            <a href="payments_form.php?gid=<?php echo $row2['gid']; ?>&gname=<?php echo $row2['Gname'];?>&price=<?php echo $row2['price'];?>" class="btn btn-success">Buy now</a>
                                        </div>
                                        <h4 class="media-heading"><a href="#"><?php echo $row2['Gname']; ?></a> <br><small><?php echo $row2['date']; ?> Edition</small></h4>
                                        <p><?php echo $row2['description'];?><br><strong>Artist Name: <?php echo $row2['aname'];?> </strong></p>
                                        
                                    </div>
                                </div>
   					<?php
					}
					?>
					 </div>
                         </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
		 </div>
                <!-- END General Forms Block -->
            </div>
<?php include("footer.php"); ?>
