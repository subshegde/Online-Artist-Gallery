<?php include("metatag.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
				               <!-- Pre Page Content -->
				               
				               
            <div id="pre-page-content">
              <h1><!-- Page Content -->
            </h1>
            </div>
            <div id="page-content">
              <!-- END Breadcrumb -->
              <!-- General Forms Block -->
<div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>User Info Form</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
<form name="formID" id="formID" method="post" action="userinfo_insert.php">
  <table width="309" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>USER_INFORMATION</strong></div></td>
    </tr>
    <tr>
      <td width="128"><strong>USER_ID</strong></td>
      <td width="171"><select name="user_id" id="user_id">
        <option selected>select </option>
        <?php
		include('dbconnect.php');
		$sql="select * from  bank";
		$res=mysql_query($sql);
		while($row=mysql_fetch_array($res))
		{ 
		?>
        <option value="<?php echo $row['userid'];?>"><?php echo $row['bankname'];?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td><strong>FIRSTNAME</strong></td>
      <td><input name="firstname" type="text" id="firstname" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>MIDDLENAME</strong></td>
      <td><input name="middlename" type="text" id="middlename" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>LASTNAME</strong></td>
      <td><input name="lastname" type="text" id="lastname" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>PHONE</strong></td>
      <td><input name="phone" type="text" id="phone" class="validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td><strong>GENDER</strong></td>
      <td><strong>Male
        </strong>
        <input name="gender" type="radio" value="male" checked>
        <strong>        Female</strong>        <input name="gender" type="radio" value="female"></td>
    </tr>
    <tr>
      <td><strong>EMAILID</strong></td>
      <td><input name="emailid" type="text" id="emailid" class="validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td><strong>ADDRESS</strong></td>
      <td><textarea name="address" id="address" class="validate[required,custom[address]]"></textarea></td>
    </tr>
    <tr>
      <td><strong>PINCODE</strong></td>
      <td><input name="pincode" type="text" id="pincode" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="121" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
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
			
			
<?php include("footer.php"); ?>
