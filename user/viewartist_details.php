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
                    <li class="active"><a href="">Artist Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Artist Details</h4>
                  
         <!-- Table Options -->
                <!-- END Table Options -->
				
				
<table  class="table table-bordered table-hover">
<thead>
  <tr>
    <th>Aid</th>
    <th>Aname</th>
    <th>workexp</th>
    <th>Award Own</th>
    <th>Address</th>
    <th>Emailid</th>
    <th>ContNo</th>
    
  </tr>
  </thead>
  <tbody>
<?php include('dbconnect.php') ?>
<?php
$sl=1;
$sql="select * from Artist_Details";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$Aid=$row['aid'];
?>
  <tr>
    <td>&nbsp;<?php echo  $sl++; ?></td>
    <td>&nbsp;<?php echo $row['aname'];?></td>
    <td>&nbsp;<?php echo $row['workexperience'];?></td>
    <td>&nbsp;<?php echo $row['awardwin'];?></td>
    <td>&nbsp;<?php echo $row['aaddress'];?></td>
    <td>&nbsp;<?php echo $row['email_id'];?></td>
    <td>&nbsp;<?php echo $row['contno'];?></td>
    
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
