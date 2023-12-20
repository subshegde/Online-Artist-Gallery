<?php include("metatag.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
				
            <!-- Page Content -->
            <div id="page-content">USER INFO VIEW
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
                    <a href="userinfo_form.php" class="btn btn-success"><i class="icon-plus"></i> User Info Details</a>
              </div>
                <!-- END Table Options -->
				
 <p>User Info </p>
 <table  class="table table-bordered" id="sample_1">
 <thead>				

  <tr>

  <th>slno</td>
    <th><LABEL for=checkbox_row_1>userid</LABEL></th>
    <th><LABEL for=checkbox_row_2>firstname</LABEL></th>
    <th><LABEL for=checkbox_row_3>middlename</LABEL></th>
    <th><LABEL for=checkbox_row_4>lastname</LABEL></th>
    <th><LABEL for=checkbox_row_5>phone</LABEL></th>
    <th><LABEL for=checkbox_row_6>gender</LABEL></th>
    <th><LABEL for=checkbox_row_7>emailid</LABEL></th>
    <th><LABEL for=checkbox_row_8>address</LABEL></th>
    <th><LABEL for=checkbox_row_9>pincode</LABEL></th>
    <th>Edit</th>
    <th>Delete</th>
	 </tr>
  </thead>
   <tbody>
  <?php
  $sn=1;
  include("dbconnect.php");
  $sql="select * from userinfo  u,bank bk where u.userid=bk.userid ";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  
  <tr>
  <td>&nbsp;<?php echo $sn++; ?></th>
    <th>&nbsp;<?php echo $row["bankname"];?></td>
    <td>&nbsp;<?php echo $row["firstname"];?></td>
    <td>&nbsp;<?php echo $row["middlename"];?></td>
    <td>&nbsp;<?php echo $row["lastname"];?></td>
    <td>&nbsp;<?php echo $row["phone"];?></td>
    <td>&nbsp;<?php echo $row["gender"];?></td>
    <td>&nbsp;<?php echo $row["emailid"];?></td>
    <td>&nbsp;<?php echo $row["address"];?></td>
    <td>&nbsp;<?php echo $row["pincode"];?></td>
    <td>&nbsp;<a href="userinfo_edit.php?u_id=<?php echo $row['userid'];?>">Edit</a></td>
    <td>&nbsp;<a href="userinfo_delete.php?u_id=<?php echo $row['userid'];?>">Delete</a></td>
  </tr>
    </tbody>
  <?php
	}
	?>
   
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

