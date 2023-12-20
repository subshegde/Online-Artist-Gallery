<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
				               
				               
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Gallery Type  Form<br>
                  <small>Please Provide..!</small></h1>
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
                    <li class="active"><a href="">Gallery Type</a></li>
              </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Gallery Type Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form name="form1" id="formID"method="post" action="gallery_type_details_insert.php">
  <table width="313" height="173" border="0" align="center">
    <tr>
      <td><strong>Gallery Type Name </strong></td>
      <td><input name="gtype_name"class="validate[required,custom[onlyLetter]]" type="text" id="gtype_name"></td>
    </tr>
    <tr>
      <td><strong>Description</strong></td>
      <td><textarea name="gt_description"class="validate[required]" id="gt_description"></textarea></td>
    </tr>
    <tr>
      <td height="26" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary"value="Submit">
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


