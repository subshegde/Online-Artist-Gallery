<?php include("metatag.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
				
            <!-- Page Content -->
            <div id="page-content">BILL VIEW  
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
                    <a href="bill_form.php" class="btn btn-success"><i class="icon-plus"></i> Add Bill Details</a>
              </div>
                <!-- END Table Options -->
				
				
    <table  class="table table-bordered" id="sample_1">
    <thead>
    <tr>
    <th><LABEL for=checkbox_row_1>sl no</LABEL></th>
    <th><LABEL for=checkbox_row_1>transid</LABEL></th>
    <th><LABEL for=checkbox_row_2>userid</LABEL></th>
    <th><LABEL for=checkbox_row_3>totalamount</LABEL></th>
    <th><LABEL for=checkbox_row_4>discount</LABEL></th>
    <th><LABEL for=checkbox_row_5>bankid</LABEL></th>
    <th><LABEL for=checkbox_row_6>totalitems</LABEL></th>
    <th><LABEL for=checkbox_row_7>status</LABEL></th>
    <th><LABEL for=checkbox_row_8>billno</LABEL></th>
    <th>Edit</td>
    <th>Delete</td>
  </tr>
  </thead>
  <tbody>
  <?php
  $sn=1;
  include("dbconnect.php");
  $sql="select * from bill b,bank bk where b.userid=bk.userid ";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++; ?></td>
    <td>&nbsp;<?php echo $row["transid"];?></td>
    <td>&nbsp;<?php echo $row["bankname"];?></td>
    <td>&nbsp;<?php echo $row["totalamount"];?></td>
    <td>&nbsp;<?php echo $row["discount"];?></td>
    <td>&nbsp;<?php echo $row["bankid"];?></td>
    <td>&nbsp;<?php echo $row["totalitems"];?></td>
    <td>&nbsp;<?php echo $row["status"];?></td>
    <td>&nbsp;<?php echo $row["billno"];?></td>
    <td>&nbsp;<a href="bill_edit.php?t_id=<?php echo $row['transid'];?>">edit</a></td>
	<td>&nbsp;<a href="bill_delete.php?t_id=<?php echo $row['transid'];?>">Delete</a></td>
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
