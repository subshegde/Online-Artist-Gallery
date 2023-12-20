<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> General Forms<br><small>All the elements you need!</small></h1>
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
                    <div class="block-title">
                        <h4>Payment Details </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<?php include('dbconnect.php') ?>
<?php
$uname=$_SESSION['uname'];
$gid=$_REQUEST['gid'];
$gname=$_REQUEST['gname'];
$price=$_REQUEST['price'];

							$sql="select * from user_details where user_name='$uname'";
							$res=$conn->query($sql);
							$row=mysqli_fetch_array($res);
								$uid=$row['uid'];



$dat=date('d-m-Y');
?>
<form name="formID" id="formID" method="post" action="pay.php">
<input type="hidden" name="uid" value="<?php echo $uid; ?>">
<input name="galleryid" type="hidden" id="galleryid" value="<?php echo $gid; ?>">
  <table width="611" border="0">
    <tr>
      <td colspan="2">PAYMENTS</td>
    </tr>

      <td> Name </td>
      <td><input name="firstname" type="text" id="firstname" value="<?php echo $row['firstname']; ?>" readonly=""></td>
    </tr>
    <tr>
      <td>Gallery Name </td>
      <td><input name="galleryname" type="text" id="galleryname" value="<?php echo $gname; ?>" readonly=""></td>
    </tr>
	 <tr>
      <td>Contact  </td>
      <td><input name="contno" type="text" id="contno" value="<?php echo $row['contno']; ?>" readonly=""></td>
    </tr>
	<tr>
      <td>Email  </td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id']; ?>" readonly=""></td>
    </tr>
    <!-- <tr>
      <td>Bank Name </td>
      <td><select name="bankname" id="bankname">
        <option value="">Select Bank</option>
        <option value="SBI">SBI</option>
        <option value="HDFC">HDFC</option>
        <option value="CANARA BANK">CANARA BANK</option>
        <option value="AXIS">AXIS</option>
        <option value="CORPORATION">CORPORATION</option>
      </select></td>
    </tr> -->
   <!--  <tr>
      <td>Card No </td>
      <td><input name="card_no" type="text" id="card_no"></td>
    </tr>
    <tr>
      <td>Pin No </td>
      <td><input name="pin_no" type="text" id="pin_no"></td>
    </tr>
    <tr> -->
      <td>Amount</td>
      <td><input name="amount" type="text" id="amount" readonly="" value="<?php echo $price; ?>" ></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="date" type="text" id="date"class="validate[required]" readonly="" value="<?php echo $dat; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success"></td>
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
