<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
				               
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Buyer  Form<br>
                  <small>Please provide..!</small></h1>
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
                    <li class="active"><a href="">Buyer</a></li>
              </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Buyer Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <div class="block-content">
                      <form name="form1"id="formID" method="post" action="buyer_details_insert.php">
                        <table width="409" height="311" border="0" align="center">
    <tr>
      <td><strong>Name</strong></td>
      <td><input name="bname"class="form-control validate[required,custom[onlyLetter]]" type="text" id="bname"></td>
    </tr>
    <tr>
      <td><strong>Address </strong></td>
      <td><textarea name="address"class="validate[required]" id="address"></textarea></td>
    </tr>
    <tr>
      <td><strong>City</strong></td>
      <td><input name="bcity" class="validate[required,custom[onlyLetter]]"type="text" id="bcity"></td>
    </tr>
    <tr>
      <td><strong>Contact Number</strong></td>
      <td><input name="cont_no"class="validate[required,custom[mobile]]" type="text" id="cont_no"></td>
    </tr>
    <tr>
      <td><strong>Email Id </strong></td>
      <td><input name="email_id"class="validate[required,custom[email]]" type="text" id="email_id"></td>
    </tr>
    <tr>
      <td><strong>Work Status </strong></td>
      <td><input name="work_status" class="validate[required]"type="text" id="work_status"></td>
    </tr>
    <tr>
      <td><strong>User Name </strong></td>
      <td><input name="user_name"class="validate[required,custom[onlyLetter]]]" type="text" id="user_name"></td>
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
