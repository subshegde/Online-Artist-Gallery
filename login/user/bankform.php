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
                        <h4>Bank Form</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
<form name="formID" id="formID" method="post" action="bank_insert.php">
  <table width="441" height="464" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>BANK</strong></div></td>
    </tr>
    <tr>
      <td width="195"><strong>BANK_ID</strong></td>
      <td width="140"><input name="bank_id" type="text" id="bank_id"class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>BANK_NAME</strong></td>
      <td><input name="bank_name" type="text" id="bank_name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>BRANCH_NAME</strong></td>
      <td><input name="branch_name" type="text" id="branch_name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>CREDIT_CARD_NUMBER</strong></td>
      <td><input name="credit_card_number" type="text" id="credit_card_number" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>BALANCE</strong></td>
      <td><input name="balance" type="text" id="balance"class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>DATE</strong></td>
      <td><input name="date" type="date" id="date"class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td><strong>PIN_NUMBER</strong></td>
      <td><input name="pin_number" type="text" id="pin_number"class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="113" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset"  class="btn btn-danger">
      </div></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
 </div>
                    <!-- END General Forms Content -->
              </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include("footer.php"); ?>

