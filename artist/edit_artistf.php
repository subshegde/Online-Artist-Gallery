
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Artist form<br><small>Please provide...!</small></h1>
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
                    <li class="active"><a href="">Artist</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>ARTIST DETAILS </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
  <?php include('dbconnect.php') ?>
<?php
    $uname=$_SESSION['uname'];
	 $sql="select * from artist_details where user_name='$uname' ";
	 $res=$conn->query($sql);
	 $row=mysqli_fetch_array($res);
?>
<body>
<form name="formID" id="formID" method="post" action="edit_artistin.php">
<input type="hidden" name="aid" value="<?php echo $row['aid'];?>">
  <table width="405" border="0">
    
   
    <tr>
      <td>Artist Name</td>
      <td><input name="aname" type="text" id="aname" value="<?php echo $row['aname']; ?>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Work Experience</td>
      <td><input name="workexp" type="text" id="workexp" value="<?php echo $row['workexperience']; ?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Award Own </td>
      <td><input name="awardwin" type="text" id="awardwin" value="<?php echo $row['awardwin']; ?>" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Address      </td>
      <td><textarea name="addrs" id="addrs" class="validate[required]" ><?php echo $row['aaddress']; ?></textarea> </td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="emailid" type="text" value="<?php echo $row['email_id']; ?>" class="validate[required,custom[email]]" ></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contno" type="text" id="contno" value="<?php echo $row['contno']; ?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" class="btn btn-success" value="Submit"></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
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
