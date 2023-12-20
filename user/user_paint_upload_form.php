<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Gallery Type Form<br>
              <small>All the elements you need!</small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">General</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                  <div class="block-title">User paint upload form
                    <h4><!-- General Forms Content -->
                    </h4>
                    </div>
                    <div class="block-content">


  <form name="form1" method="post" action="user_paint_upload_insert.php" enctype="multipart/form-data" id="formID">

<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="629" height="385" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">User paint upload </div></td>
    </tr>
    <tr>
      <td>User name </td>
      <td><select name="uid" id="uid" class="form-control validate[required]">
	   
	 <?php
	 include('dbconnect.php');
	 $uname=$_SESSION['uname'];
	 $sql="select * from user_details where user_name='$uname'";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	   ?>
        <option value="<?php echo $row['uid'];?>"><?php echo $row['user_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>Artist</td>
      <td><select name="aid" id="aid" class="form-control validate[required]">
        <?php
	 
	
	 $sql="select * from artist_details ";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	   ?>
        <option value="<?php echo $row['aid'];?>"><?php echo $row['aname'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>Paint name </td>
      <td><input name="paintname" type="text" id="paintname" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Paint description </td>
      <td><textarea name="paintdescription" class="form-control validate[required]" id="paintdescription"></textarea></td>
    </tr>
    <tr>
      <td>Paint upload </td>
      <td><input name="paintupload" type="file" id="paintupload" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Upload date </td>
      <td><input name="uploaddate" type="date" value="<?php echo date('Y-m-d');?>" id="uploaddate" readonly="" class="form-control"></td>
    </tr>
    
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Upload">
        <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
		
      </div></td>
    </tr>
  </table>
</form>


</div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php');  ?>>
