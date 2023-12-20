
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

                        <h4>View Artist Details</h4>
                  
         <!-- Table Options -->
               
<table  class="table table-bordered table-hover">
<thead>
  <tr>
    <th>Sl No</th>
    <th>Artist Name</th>
    <th>Work Exp</th>
    <th>Award Own</th>
    <th>Address</th>
    <th>Email Id</th>
    <th>Contact No</th>
    <th>User Name</th>
	 <th>Delete</th>
 
  </tr>
  </thead>
  <tbody>
     <?php include('dbconnect.php') ?>
<?php 
$s1=1;
$sql="select * from Artist_Details";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$Aid=$row["aid"];
 ?>
  <tr>
    <td>&nbsp;<?php echo $s1++; ?></td>
    <td>&nbsp;<?php echo $row["aname"]; ?></td>
    <td>&nbsp;<?php echo $row["workexperience"]; ?></td>
    <td>&nbsp;<?php echo $row["awardwin"]; ?></td>
    <td>&nbsp;<?php echo $row["aaddress"]; ?></td>
    <td>&nbsp;<?php echo $row["email_id"]; ?></td>
    <td>&nbsp;<?php echo $row["contno"]; ?></td>
    <td>&nbsp;<?php echo $row["user_name"]; ?></td>
	<td><a href="delete_artist_details.php?Aid=<?php echo $Aid; ?>">Delete</a></td>
	 </tr>
  <?php }
   ?>
  </tbody>
  </table>
   </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php');  ?>
