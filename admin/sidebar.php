<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3];
?>
 <!-- Sidebar Tabs -->
                    <div class="sidebar-tabs-con">
                        <ul class="sidebar-tabs" data-toggle="tabs">
                            <li class="active">
                                <a href="#side-tab-menu"><i class="glyphicon-list"></i></a>
                            </li>
                          
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="side-tab-menu">
                                <!-- Primary Navigation -->
                                <nav id="primary-nav">
                                    <ul>
                                        <li>
                                            <a href="home.php" class="<?php if ($first_part=="home.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-display"></i>Home</a>
                                        </li>
										<li>
                                            <a href="viewgtype_details.php" class="<?php if ($first_part=="viewgtype_details.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-fire"></i>GalleryType Details</a>
                                         </li>
                                      
                                        <li>
                                            <a href="viewartist_details.php" class="<?php if ($first_part=="viewartist_details.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-vector_path_curve"></i>Artist Details</a>
                                           
                                        </li>
										<li>
                                            <a href="material_details_view.php" class="<?php if ($first_part=="material_details_view.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-vector_path_curve"></i>Material Details</a>
                                           
                                        </li>
			
                                        <li>
                                            <a href="viewgallery_details.php" class="<?php if ($first_part=="viewgallery_details.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-more_windows"></i>Gallery Details</a>
                                            
                                        </li>
                                     
									 <li>
                                            <a href="viewuserdetails.php" class="<?php if ($first_part=="viewuserdetails.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-fire"></i>User Details</a>
                                      </li>  
									  
									  
									  <li>
                                            <a href="gallary_rating_view.php" class="<?php if ($first_part=="gallary_rating_view.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-fire"></i> Gallery Rating Details</a>
                                      </li> 
									  <li>
                                            <a href="user_paint_upload_view.php" class="<?php if ($first_part=="user_paint_upload_view.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-fire"></i> Users Paintings</a>
                                      </li> 
									 
									  <li>
                                            <a href="changepassword.php" class="<?php if ($first_part=="changepassword.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-fire"></i>Change Password</a>
                                      </li> 
									   <li>
                                            <a href="../logout.php" class="<?php if ($first_part=="../logout.php") {echo "menu-link active"; } else  {echo "noactive";}?>"><i class="glyphicon-fire"></i>Logout</a>
                                      </li>         
                                        
                                    </ul>
                                </nav>
                                <!-- END Primary Navigation -->
                            </div>
                           
                        </div>
                    </div>
                    <!-- END Sidebar Tabs -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </aside>
            <!-- END Left Sidebar -->
