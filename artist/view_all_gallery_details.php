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
                    <li class="active"><a href="">View Gallery</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        
                  
  <!-- Simple Gallery Block -->
                <div class="block block-themed">
                    <!-- Simple Gallery Title -->
                    <div class="block-title">
                        <h4><i class="icon-camera-retro"></i> View All Paintings Gallery Details</h4>
                    </div>
                    <!-- END Simple Gallery Title -->

                    <!-- Simple Gallery Content -->
                    <div class="block-content">
                        <!--
                        Just create a div with the class .gallery. Inside put the images any way you like in a fluid grid.
                        If you would like to enable the lightbox, just add the value lightbox-gallery in the attribute data-toggle of the div. If you do that
                        make sure that you put your images inside links with the class .gallery-link and the href of your large image!
                        -->
                        <div class="gallery" data-toggle="lightbox-gallery">
                            <div class="row-fluid row-items">
 <?php include('dbconnect.php') ?>	
<?php

$sql="select * from gallery_details";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$gname=$row['Gname'];
$gpaint=$row['upload_paint'];
$price=$row['price'];
$status=$row['status'];
?>
							    <div class="span3">
                                    <a href="../artist/paint_images/<?php echo $gpaint;?>" class="gallery-link">
									<?php echo $row['Gname'];?> 
                                        <img src="../artist/paint_images/<?php echo $gpaint; ?>" alt="image" title="<?php echo $gname; ?>">
										<br><h4><?php echo $gname; ?></h4>
										<br><font color="#000000">Price:<b><?php echo $price;?></b></font>&nbsp;&nbsp;&nbsp;Status: <?php if($status=='new') { ?><p class="btn btn-info"> <?php echo $status; ?></p> <?php } else { ?> <p class="btn btn-warning"> <?php echo $status; ?></p> <?php } ?></p>
                                    </a>
                                </div>
								<?php
								}
								?>
                              
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- END Simple Gallery Content -->
                </div>
                <!-- END Simple Gallery Block -->            <!-- END Page Content -->
			
			

       
    </body>
</html>
 <?php include('footer.php');  ?>
