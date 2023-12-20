<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
				               
            <div id="pre-page-content">
              <h1><i class="glyphicon-nameplate_alt themed-color"></i> Bank Form<br>
                <small>Please provide bank details...!</small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.php"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
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
<form name="form1"id="formID" method="post" action="bank_details_insert.php">
  <p align="center">&nbsp;</p>
  <table width="346" height="197" border="0" align="center">
    <tr>
      <td><strong>User Name </strong></td>
      <td><input name="user_name" class="validate[required]"type="text" id="user_name"></td>
    </tr>
    <tr>
      <td><strong>Card Number</strong></td>
      <td><input name="card_no" class="validate[required,custom[onlyNumber]]"type="text" id="card_no"></td>
    </tr>
    <tr>
      <td><strong>Pin Number</strong></td>
      <td><input name="pin_no" class="validate[required]"type="password" id="pin_no"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit"class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset"class="btn btn-danger" value="Reset">
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


