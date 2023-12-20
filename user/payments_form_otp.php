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
 $uid=$_POST['uid'];
 $gid=$_POST['galleryid'];
 $bankname=$_POST['bankname'];
 $card_no=$_POST['card_no'];
 $pin_no=$_POST['pin_no'];
 $bankname=$_POST['bankname'];
 $amt=$_POST['amount'];
 $date=$_POST['date'];
 $email_id=$_POST['email_id'];
 $gpin=$_POST['gpin'];
?>
<form name="formID" id="formID" method="post" action="payments_insert.php">
<input type="hidden" name="uid" value="<?php echo $uid; ?>">
<input name="galleryid" type="hidden" id="galleryid" value="<?php echo $gid; ?>">



<input type="hidden" name="uid" value="<?php echo $uid; ?>">
<input type="hidden" name="galleryid" value="<?php echo $gid; ?>">
<input type="hidden" name="bankname" value="<?php echo $bankname; ?>">
<input type="hidden" name="card_no" value="<?php echo $card_no; ?>">
<input type="hidden" name="pin_no" value="<?php echo $pin_no; ?>">
<input type="hidden" name="amount" value="<?php echo $amt; ?>">

<input type="hidden" name="date" value="<?php echo $date; ?>">
<input type="hidden" name="gpin" value="<?php echo $gpin; ?>">

  <table width="611" border="0">
    <tr>
      <td colspan="2">Verification OTP No:</td>
    </tr>
    <tr>
      <td> Enter OTP : </td>
      <td><input name="otp" type="text" id="galleryname" value="" ></td>
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
