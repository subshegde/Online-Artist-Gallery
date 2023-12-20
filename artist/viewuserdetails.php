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
                    <li class="active"><a href=""></a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View User Details</h4>
                  
         <!-- Table Options -->
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
                </div>
                <!-- END Table Options --><table class="table table-bordered table-hover">
 <table  class="table table-bordered table-hover">
<thead>
 <tr>
    <th>Sl No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Email-Id</th>
    <th>Username</th>
  </tr>
 <?php include('dbconnect.php') ?>	
<?php
$sql="select * from user_details";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$Uid=$row["uid"];
?>
  <tr>
    <td>&nbsp;<?php echo $Uid; ?></td>
    <td>&nbsp;<?php echo $row['firstname']; ?></td>
    <td>&nbsp;<?php echo $row['lastname']; ?></td>
    <td>&nbsp;<?php echo $row['address']; ?></td>
    <td>&nbsp;<?php echo $row['contno']; ?></td>
    <td>&nbsp;<?php echo $row['email_id']; ?></td>
    <td>&nbsp;<?php echo $row['user_name']; ?></td>
  </tr>
 <?php
  }
  ?>
  </tbody>
</table>
 </div> 
    <!-- END Page Content -->
			
			 <script src="js/helpers/jquery.min.js"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>


 <?php include('footer.php');  ?>
