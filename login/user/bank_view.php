<?php include("metatag.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
				
            <!-- Page Content -->
            <div id="page-content">BANK VIEW  
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
                    <a href="bank_form.php" class="btn btn-success"><i class="icon-plus"></i> Add Bank Details</a>
              </div>
                <!-- END Table Options -->
				

<table  class="table table-bordered" id="sample_1">
 <thead>
 <p>Bank </p>
 
   <tr>
     <th>User-id</th>
     <th>Bank-id</th>
     <th>Bank-Name</th>
     <th>Branch-name</th>
     <th>Credit_card-No</th>
     <th>Balance</th>
     <th>Date</th>
     <th>Pin-Number</th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>
   </thead>
   <tbody>
   <?php
   include('dbconnect.php');
    $sql="select * from  bank";
	 $res=mysql_query($sql);
   while($row=mysql_fetch_array($res))
   {
   

   ?>
   <tr>
     <td>&nbsp;<?php echo $row['userid'];?></td>
     <td>&nbsp;<?php echo $row['bankid'];?></td>
     <td>&nbsp;<?php echo $row['bankname'];?></td>
     <td>&nbsp;<?php echo $row['branchname'];?></td>
     <td>&nbsp;<?php echo $row['creditcardnumber'];?></td>
     <td>&nbsp;<?php echo $row['balance'];?></td>
     <td>&nbsp;<?php echo $row['date'];?></td>
     <td>&nbsp;<?php echo $row['pinnumber'];?></td>
     <td>&nbsp;<a href="bank_edit.php?u_id=<?php echo $row['userid'];?>">edit</a></td>
     <td>&nbsp;<a href="bank_delete.php?u_id=<?php echo $row['userid'];?>">Delete</a></td>
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
