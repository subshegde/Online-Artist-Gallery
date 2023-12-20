<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
				               
				               
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> User Form<br>
                  <small> Please Provide.. !</small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Form</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">user</a></li>
              </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>User Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form name="form1"id="formID" method="post" action="user_details_insert.php">
  <p align="center">&nbsp;</p>
  <table width="416" height="324" border="0" align="center">
    <tr>
      <td><strong>First Name </strong></td>
      <td><input name="firstname"class="validate[required,custom[onlyLetter]]" type="text" id="firstname"></td>
    </tr>
    <tr>
      <td><strong>Last Name </strong></td>
      <td><input name="lastname" class="validate[required,custom[onlyLetter]]"type="text" id="lastname"></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
      <td><textarea name="address" class="validate[required]"id="address"></textarea></td>
    </tr>
    <tr>
      <td><strong>Contact Number</strong></td>
      <td><input name="contno" class="validate[required,custom[mobile]]"type="text" id="contno"></td>
    </tr>
    <tr>
      <td><strong>Email Id </strong></td>
      <td><input name="email_id" class="validate[required,custom[email]"type="text" id="email_id"></td>
    </tr>
    <tr>
      <td><strong>Passward</strong></td>
      <td><input name="user_name"class="validate[required]" type="password" id="user_name"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset" class="btn btn-danger" value="Reset">
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


