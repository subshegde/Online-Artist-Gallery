<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				
            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.php"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">Artist Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Artist Details</h4>
                  
         <!-- Table Options -->
                                  <a href="artist_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Artist</a>

                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
				<thead>
  <tr>
    <th width="18">Sl&nbsp;No</th>
    <th width="39">Artist&nbsp;Name</th>
    <th width="62">Work&nbsp;Experience</th>
    <th width="91">Award&nbsp;Winning</th>
    <th width="47">Address</th>
    <th width="50">Email Id</th>
    <th width="49">Contcat&nbsp;Number</th>
    <th width="19">Passward&nbsp;</th>
    <th width="19">Edit</th>
    <th width="19">Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  
  include('../db_connection/dbconnect.php');
  $sl=1;
  $sql="select * from artist_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
    ?>
    <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<?php echo $row['aname']; ?></td>
    <td>&nbsp;<?php echo $row['work_exp']; ?></td>
    <td>&nbsp;<?php echo $row['a_winning']; ?></td>
    <td>&nbsp;<?php echo $row['address']; ?></td>
    <td>&nbsp;<?php echo $row['email_id']; ?></td>
    <td>&nbsp;<?php echo $row['cont_no']; ?></td>
    <td>&nbsp;<?php echo $row['user_name']; ?></td>
    <td><a href="artist_details_edit.php?aid=<?php echo $row['aid'];?>">edit</a></td>
    <td><a href="artist_details_delete.php?aid=<?php echo $row['aid']; ?>">delete</a></td>
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
<?php include('footer.php');  ?>
