<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
				               
				               
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i>Payment  Form<br>
                  <small>Please Provide..!</small></h1>
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
                      <form name="form1" id="formID"method="post" action="payment_details_insert.php">
                        <table width="337" height="247" border="0" align="center">
    <tr>
      <td><strong>User Name </strong></td>
      <td><select name="uid" id="uid">
        <option>Select </option>
        <?php
		
		include('../db_connection/dbconnect.php');
  
        $sql="select * from  user_details";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
        <option value="<?php echo $row['uid'];?>"><?php echo $row['firstname'];?></option>
        <?php
		
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Gallery Name </strong></td>
      <td><select name="gid" id="gid">
        <option>Select </option>
        <?php
		
        $sql="select * from gallery_details";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
        <option value="<?php echo $row['gid'];?>"><?php echo $row['gname'];?></option>
        <?php
		
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Bank Name </strong></td>
      <td><input name="bank_name" class="validate[required,custom[onlyLetter]]"type="text" id="bank_name"></td>
    </tr>
    <tr>
      <td><strong>Amount</strong></td>
      <td><input name="amt" class="validate[required,custom[onlyNumber]]"type="text" id="amt"></td>
    </tr>
    <tr>
      <td><strong>Date</strong></td>
      <td><input name="pdate"class="validate[required,custom[date]]" type="text" id="pdate"></td>
    </tr>
    <tr>
      <td><strong>Payment Status </strong></td>
      <td><input name="p_status"class="validate[required]" type="text" id="p_status"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit"class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset" class="btn btn-danger"value="Reset">
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

