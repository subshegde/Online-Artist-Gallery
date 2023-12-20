<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Bank Details Form Update<br>
                  <small>Please provide...!</small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Update Form</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">Bank</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Bank Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">

<?php
 include('../db_connection/dbconnect.php');
 $bank_id=$_REQUEST['bank_id'];
 
 $sql="select * from bank_details where bank_id='$bank_id'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="bank_details_update.php">
<input type="hidden" value="<?php echo $row['bank_id'];?>" name="bank_id">
  <p align="center">&nbsp;</p>
  <table width="466" height="229" border="0" align="center">
    <tr>
      <td><strong>User Name </strong></td>
      <td><input name="user_name" value="<?php echo $row['user_name']; ?>" type="text" id="user_name"></td>
    </tr>
    <tr>
      <td><strong>Card No </strong></td>
      <td><input name="card_no" value="<?php echo $row['card_no']; ?>" type="text" id="card_no"></td>
    </tr>
    <tr>
      <td><strong>Pin No</strong></td>
      <td><input name="pin_no" <?php echo $row['pin_no']; ?>type="password" id="pin_no"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit"class="btn btn-primary" value="Submit">
        
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

