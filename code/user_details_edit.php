<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> User Update Form<br>
                  <small>Please provide...!</small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Update Form</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">User</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>User Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<?php
include('../db_connection/dbconnect.php'); 
$uid=$_REQUEST['uid'];
 
$sql="select * from user_details where uid='$uid'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="user_details_update.php">
<input type="hidden" value="<?php echo $row['uid'];?>" name="uid">
<table width="419" height="313" border="0" align="center">
    <tr>
      <td><strong>First Name </strong></td>
      <td><input name="firstname" value="<?php echo $row['firstname']; ?>" type="text" id="firstname"></td>
    </tr>
    <tr>
      <td><strong>Last Name </strong></td>
      <td><input name="lastname" value="<?php echo $row['lastname']; ?>" type="text" id="lastname"></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
      <td><textarea name="address" id="address"><?php echo $row['address']; ?></textarea></td>
    </tr>
    <tr> 
      <td><strong>Contact Number</strong></td>
      <td><input name="contno" value="<?php echo $row['contno']; ?>" type="text" id="contno"></td>
    </tr>
    <tr>
      <td><strong>Email Id </strong></td>
      <td><input name="email_id" value="<?php echo $row['email_id']; ?>" type="text" id="email_id"></td>
    </tr>
    <tr>
      <td><strong>User Name </strong></td>
      <td><input name="user_name" value="<?php echo $row['user_name']; ?>" type="text" id="user_name"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-success"value="Submit">
      </div></td>
    </tr>
  </table>
  <p>&nbsp;  </p>
</form>
</div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php');  ?>

