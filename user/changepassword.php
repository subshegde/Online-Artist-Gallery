<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i>Art Gallery<br><small>Painting!</small></h1>
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
                        <h4>Change Password</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">                  
     

<form name="formID" id="formID" method="post" action="changepassword2.php">
  <table width="392" border="0">
    <tr>
      <td colspan="2"><div align="center" class="style1">Change Password </div></td>
    </tr>
    <tr>
      <td width="204"><div align="right">Current Password : </div></td>
      <td width="178"><input name="old_password" type="password" id="old" class="validate[required]"></td>
    </tr>
    <tr>
      <td><div align="right">New Password: </div></td>
      <td><input name="new_password" type="password" id="new_password" class="validate[required]"></td>
    </tr>
    <tr>
      <td><div align="right">Confirm Password: </div></td>
      <td><input name="confirm_password" type="password" id="confirm" class="validate[required]"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td> <div class="entry">
						<button type="submit"  class="btn btn-success">Save PAssword</button>
	    </div></td>
    </tr>
  </table>
</form>
     </div>
	 </div>  </div>
         <?php include('footer.php');  ?>       <!-- END General Forms Block -->
          
            <!-- END Page Content -->
			
			

     
   

