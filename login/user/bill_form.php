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
                        <h4>Bill Form</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
<form name="formID" id="formID" method="post" action="bill_insert.php">
  <div align="center">
    <table width="346" height="240" border="0">
      <tr>
        <td colspan="2"><div align="center"><strong>BILL</strong></div></td>
      </tr>
      <tr>
        <td width="128"><strong>TRANSID</strong></td>
        <td width="208"><input name="transid" type="text" id="transid" class="validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><strong>USERID</strong></td>
        <td><select name="userid" id="userid">
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
        <td><strong>TOTALAMOUNT</strong></td>
        <td><input name="totalamount" type="text" id="totalamount" class="validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><strong>DISCOUNT</strong></td>
        <td><input name="discount" type="text" id="discount" class="validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><strong>BANKID</strong></td>
        <td><input name="bankid" type="text" id="bankid" class="validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><strong>TOTALITEMS</strong></td>
        <td><input name="totalitems" type="text" id="totalitems" class="validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><strong>STATUS</strong></td>
        <td><input name="status" type="text" id="status" class="validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td><strong>BILLNO</strong></td>
        <td><input name="billno" type="text" id="billno" class="validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td height="93" colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
        </div></td>
      </tr>
    </table>
  </div>
</form>
</div>
                    <!-- END General Forms Content -->
              </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include("footer.php"); ?>
