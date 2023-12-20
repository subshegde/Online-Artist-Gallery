<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
				               <style type="text/css">
<!--
.style4 {
	color: #660066;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
}
.style6 {
	color: #660033;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
}
.style7 {
	color: #660033;
	font-family: "Times New Roman", Times, serif;
}
-->
                               </style>
				               
				               
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Artist Form<br>
                <small>Please provide.. !</small></h1>
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
                    <li class="active"><a href="">Arist</a></li>
              </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Artist Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form name="form1" id="formID" method="post" action="artist_details_insert.php">
  <p align="center">&nbsp;</p>
  <table width="408" height="337" border="0" align="center">
    <tr>
      <td><span class="style4">Artist Name </span></td>
      <td><input name="aname" class="form-control validate[required,custom[onlyLetter]]" type="text" id="aname"></td>
    </tr>
    <tr>
      <td><span class="style4">Work Experience </span></td>
      <td><input name="work_exp" class="form-control validate[required,custom[onlyNumber]]"type="text" id="work_exp"></td>
    </tr>
    <tr>
      <td><span class="style4">Award Winning </span></td>
      <td><input name="a_winning" class="form-control validate[required]"type="text" id="a_winning"></td>
    </tr>
    <tr>
      <td class="style4">Address</td>
      <td><textarea name="address" class="form-control validate[required]"id="address"></textarea></td>
    </tr>
    <tr>
      <td><span class="style6">Email Id </span></td>
      <td><input name="email_id"class="form-control validate[required,custom[email]]" type="text" id="email_id"></td>
    </tr>
    <tr>
      <td><span class="style6">Contact Number</span></td>
      <td><input name="cont_no"class="form-control validate[required,custom[mobile]]" type="text" id="cont_no"></td>
    </tr>
    <tr>
      <td><span class="style4">Passward</span></td>
      <td><input name="user_name" class="validate[required]"type="password" id="user_name"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input name="Reset" type="reset" class="btn btn-danger" id="Reset" value="Reset">
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

