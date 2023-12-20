<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i>User_Details Form<br><small>please enter your details!</small></h1>
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
                    <li class="active"><a href="">General</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>User Details </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form name="formID" id="formID" method="post" action="userdetails_insert.php">
  <table width="443" border="0">
    <tr>
      <td colspan="2">USER DETAILS </td>
    </tr>
    <tr>
      <td width="172">first name </td>
      <td width="255"><input name="firstname" type="text" id="firstname" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>last name </td>
      <td><input name="lastname" type="text" id="lastname" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>address</td>
      <td><textarea name="addrs" id="addrs" class="validate[required,custom[onlyLetter]]" ></textarea></td>
    </tr>
    <tr>
      <td>contact no </td>
      <td><input name="contactno" type="text" id="contactno" class="validate[required,custom[onlyNumber]]" ></td>
    </tr>
    <tr>
      <td>email id </td>
      <td><input name="emailid" type="text" id="emailid" class="validate[required,custom[email]]" ></td>
    </tr>
    <tr>
      <td>user name </td>
      <td><input name="username" type="text" id="username" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
      </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
 <?php include('footer.php');  ?>
