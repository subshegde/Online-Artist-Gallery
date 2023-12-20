<?php include("metatag.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
				
            <!-- Page Content -->
            <div id="page-content">GALLERY INFO VIEW  
              <div class="clearfix">
                    <div class="btn-group pull-right">
                        <button class="btn" data-toggle="tooltip" title="Table Settings"><i class="icon-cog"></i></button>
                        <button class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down"></i></button>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="icon-print"></i> Print</a></li>
                            <li><a href="javascript:void(0)"><i class="icon-file-alt"></i> Save as PDF</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)"><i class="icon-external-link"></i> Export</a></li>
                        </ul>
                    </div>
                    <a href="gallery_info_form.php" class="btn btn-success"><i class="icon-plus"></i> Add Gallery Info Details</a>
              </div>
                <!-- END Table Options -->
				
				
    <table  class="table table-bordered" id="sample_1">
    <thead>
	<p>Gallary_Info </p>
  <tr>
    <th>Art id </th>
    <th>Art name </th>
    <th>Art type </th>
    <th>Price</th>
    <th>Date_of_launch</th>
    <th>Stock</th>
    <th>Description</th>
    <th>Sample_Image</th>
    <th>Artist_name</th>
    <th>Edit</th>
    <th>Delete</th>
	 </thead>
   <tbody>
	<?php 
   include('dbconnect.php');
   $sql="select * from  gallary_info";
   $res=mysql_query($sql);
   while($row=mysql_fetch_array($res))
   {
   
   
   ?>
  </tr>
  <tr>
    <td>&nbsp;<?php echo $row['artid'];?></td>
    <td>&nbsp;<?php echo $row['artname'];?></td>
    <td>&nbsp;<?php echo $row['arttype'];?></td>
    <td>&nbsp;<?php echo $row['price'];?></td>
    <td>&nbsp;<?php echo $row['date_of_launch'];?></td>
    <td>&nbsp;<?php echo $row['stock'];?></td>
    <td>&nbsp;<?php echo $row['description'];?></td>
    <td>&nbsp;<?php echo $row['sample_image'];?></td>
    <td>&nbsp;<?php echo $row['artist_name'];?></td> 
    <td>&nbsp;Edit</td>
    <td>&nbsp;<a href="gallery_info_delete.php?a_id=<?php echo $row['artid'];?>">Delete</a></td>
  </tr>
  <?php
  }
  ?>
 </tbody>
 </table>
<!-- END Page Content -->
			
			 <script src="js/helpers/jquery.min.js"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

       <script src="js11/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js11/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js11/DT_bootstrap.js"></script>
   <script src="js11/dynamic-table.js"></script>
    </body>
	</html>

<?php include("footer.php"); ?>
