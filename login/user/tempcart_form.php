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
                        </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
                    <div align="center"></div>
                    <form name="formID" id="formID" method="post" action="tempcart _insert.php"><table width="309" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>TAMPRARY_CARD</strong></div></td>
    </tr>
    <tr>
      <td width="149" height="36"><strong>TRANSACTION_ID</strong></td>
      <td width="144"><input name="transid" type="text" id="transid" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>USER_ID</strong></td>
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
      <td><strong>CATAGERY_ID</strong></td>
      <td><input name="catid" type="text" id="catid" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>PRODUCT_ID</strong></td>
      <td><input name="prodid" type="text" id="prodid" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>UNIT_PRICE</strong></td>
      <td><input name="unitprice" type="text" id="unitprice" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>QUENTITY</strong></td>
      <td><input name="qty" type="text" id="qty" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>DATE</strong></td>
      <td><input name="date" type="text" id="date" class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td height="35"><strong>STATUS</strong></td>
      <td><input name="status" type="text" id="status" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="147" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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

