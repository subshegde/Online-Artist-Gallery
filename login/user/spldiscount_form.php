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
                        <h4 align="center">Special Discount Form</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
<form name="formID" id="formID" method="post" action="spldiscount_insert.php">
  <table width="336" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>SPECIAL_DISCOUNT</strong></div></td>
    </tr>
    <tr>
      <td><strong>COMPANY_ID</strong></td>
      <td><input name="companyid" type="text" id="companyid" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td width="176"><strong>CATEGERY_ID</strong></td>
      <td width="144"><input name="catid" type="text" id="catid" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>PRODUCT_ID</strong></td>
      <td><input name="prodid" type="text" id="prodid" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="27"><strong>SPL_DISCOUNT_AMT</strong></td>
      <td><input name="spldiscountamt" type="text" id="spldiscountamt" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit"  class="btn btn-primary">      
          <input type="reset" name="Reset" value="Reset"  class="btn btn-danger">
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
