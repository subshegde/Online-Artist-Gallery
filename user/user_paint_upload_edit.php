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
                  <div class="block-title">User paint upload edit 
                    <h4><!-- General Forms Content -->
                    </h4>
                    </div>
                    <div class="block-content">
<?php
include('val.php');
?>

<?php
include('../db_connect/db_connection.php');
$upuid=$_REQUEST['upuid'];
$sql="select * from user_paint_upload where upuid='$upuid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>


  <form name="form1" method="post" action="user_paint_upload_update.php" enctype="multipart/form-data" id="formID">
  <input type="hidden" value="<?php echo $row['upuid'];?>" name="upuid">
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="200" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">User paint upload </div></td>
    </tr>
    <tr>
      <td>User name </td>
      <td><select name="uid" id="uid" class="form-control validate[required]">
	  <option value="">select</option>
	   <?php 
	  $sql3="select * from user_details";
	  $res3=mysqli_query($conn,$sql3);
	  while($row3=mysqli_fetch_array($res3))
	  {
	   ?>
	   <option value="<?php echo $row3['uid'];?>" <?php if($row3['uid']==$row['uid']){?>selected<?php }?>><?php echo $row3['user_name'];?></option>
	   <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>Paint name </td>
      <td><input name="paintname" type="text" id="paintname" value="<?php echo $row['paint_name'];?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Paint description </td>
      <td><input name="paintdescription" type="text" id="paintdescription" value="<?php echo $row['paint_description'];?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Paint upload </td>
      <td><input name="paintupload" type="file" id="paintupload" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Upload date </td>
      <td><input name="uploaddate" type="date" id="uploaddate" value="<?php echo $row['upload_date'];?>" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Upload status </td>
      <td><input name="uploadstatus" type="text" id="uploadstatus" value="<?php echo $row['upload_status'];?>" class="form-control validate[required]"></td>
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
			
			
<?php include('footer.php');  ?>
