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
                    <li class="active"><a href="">Beauty Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Payment Details</h4>
                  
         <!-- Table Options -->
               
				
				
<table class="table table-bordered table-hover">
<thead>
  <tr>
    <th>Payment No</th>
    <th>User Name</th>
    <th>Artist Name </th>
    <th>Purchase Gallery Name</th>

    <th>Paid Amount</th>
    <th>Paid Date</th>
	<th>Purchase Status</th>
  </tr>
  </thead>
  <tbody>
<?php include('dbconnect.php') ?>
<?php 
$uname=$_SESSION['uname'];
$sql="select * from gallery_details gd,Payments p,user_details ud,artist_details ad where p.uid=ud.uid and p.gid=gd.gid and gd.artistId=ad.aid and ud.user_name='$uname'";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$Pid=$row['pid'];
?>
  <tr>
    <td>&nbsp;<?php echo $Pid; ?></td>
    <td>&nbsp;<?php echo $row['firstname']; ?></td>
    <td><?php echo $row['aname']; ?></td>
    <td>&nbsp;<?php echo $row['Gname']; ?></td>
   
    <td>&nbsp;<?php echo $row['amt']; ?></td>
    <td>&nbsp;<?php echo $row['date']; ?></td>
	<td>&nbsp;<?php echo $row['p_status']; ?></td>
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

       
    </body>
</html>
 <?php include('footer.php');  ?>

