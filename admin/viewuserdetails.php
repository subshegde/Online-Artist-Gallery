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
                  
        
 <table  class="table table-bordered table-hover">
<thead>
 <tr>
    <th>Sl No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Email Id</th>
    <th>User Name</th>
 
  </tr>
  <?php include('dbconnect.php') ?>
<?php 
$s1=1;
$sql="select * from User_Details";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$Uid=$row["uid"];
?>
  <tr>
    <td>&nbsp;<?php echo $s1++;?></td>
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
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php');  ?>
