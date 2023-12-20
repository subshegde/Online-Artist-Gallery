<?php include("metatag.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
				
            <!-- Page Content -->
            <div id="page-content">ARTIST INFO VIEW
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
                    <a href="artist_info_form.php" class="btn btn-success"><i class="icon-plus"></i> Artist Info Details</a>
              </div>
                <!-- END Table Options -->
				


 <p>Artist Info</p>
 <table  class="table table-bordered" id="sample_1">
 <thead>
   <tr>
     <th>A_Id</th>
     <th>Firstname</th>
     <th>Middlenname </th>
     <th>Lastname </th>
     <th>Phone</th>
     <th>Gender</th>
     <th>Email-id</th>
     <th> Address </th>
     <th>Pin Code </th>
     <th>Specilization Art </th>
     <th>Total exp </th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>
   </thead>
   <tbody>
   <?php 
   include('dbconnect.php');
   $sql="select * from artist_info";
   $res=mysql_query($sql);
   while($row=mysql_fetch_array($res))
   {
   
   
   ?>
   <tr>
     <td>&nbsp;<?php echo $row['a_id'];?></td>
     <td>&nbsp;<?php echo $row['firstname'];?></td>
     <td>&nbsp;<?php echo $row['middlename'];?></td>
     <td>&nbsp;<?php echo $row['lastname'];?></td>
     <td>&nbsp;<?php echo $row['phone'];?></td>
     <td>&nbsp;<?php echo $row['gender'];?></td>
     <td>&nbsp;<?php echo $row['emailid'];?></td>
     <td>&nbsp;<?php echo $row['address'];?></td>
     <td>&nbsp;<?php echo $row['pincode'];?></td>
     <td>&nbsp;<?php echo $row['specilization_art'];?></td>
     <td>&nbsp;<?php echo $row['total_experiance'];?></td>
     <td>&nbsp;<a href="artist_info_edit.php?a_id=<?php echo $row['a_id'];?>">edit</a></td>
     <td>&nbsp;<a href="artist_info_delete.php?a_id=<?php echo $row['a_id'];?>">Delete</a></td>
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




