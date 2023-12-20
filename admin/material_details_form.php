<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Gallery Type Form<br>
              <small>All the elements you need!</small></h1>
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
                  <div class="block-title">Material details form
                    <h4><!-- General Forms Content -->
                    </h4>
                    </div>
                    <div class="block-content">
<?php
include('val.php');
?>
<form name="form1" method="post" action="material_details_insert.php" id="formID">
  <table width="200" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Material details </div></td>
    </tr>
    <tr>
      <td>Material name </td>
      <td><input name="materialname" type="text" id="materialname" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Material description</td>
      <td><textarea name="materialdescription" class="form-control validate[required]" id="materialdescription"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Update">
        <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
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
			
			
<?php include('footer.php');  ?>>
