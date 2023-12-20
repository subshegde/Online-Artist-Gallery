<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Payment Update Form<br>
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
                    <li class="active"><a href="">Payment</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Payment Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<?php
include('../db_connection/dbconnect.php'); 
$tid=$_REQUEST['tid'];
 
$sql="select * from payment_details where tid='$tid'";
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
<form name="form1" method="post" action="payment_details_update.php">
<input type="hidden" value="<?php echo $row['tid'];?>" name="tid">
<table width="309" height="283" border="0" align="center">
    <tr>
      <td><strong>User Id </strong></td>
      <td><input name="uid" value="<?php echo $row['uid'];?>" type="text" id="uid"></td>
    </tr>
    <tr>
      <td><strong>Gallery Id </strong></td>
      <td><input name="gid" value="<?php echo $row['gid'];?>" type="text" id="gid"></td>
    </tr>
    <tr>
      <td><strong>Bank Name </strong></td>
      <td><input name="bank_name" value="<?php echo $row['bank_name'];?>" type="text" id="bank_name"></td>
    </tr>
    <tr>
      <td><strong>Amount</strong></td>
      <td><input name="amt" value="<?php echo $row['amt'];?>" type="text" id="amt"></td>
    </tr>
    <tr>
      <td><strong>Date</strong></td>
      <td><input name="pdate" value="<?php echo $row['pdate'];?>" type="text" id="pdate"></td>
    </tr>
    <tr>
      <td><strong>Payment Status </strong></td>
      <td><input name="p_status" value="<?php echo $row['p_status'];?>" type="text" id="p_status"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-success"value="Update">
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



