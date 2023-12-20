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
        <h4 align="center">Gallery_info_form</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
<form action="gallery_info_insert.php" method="post"  name="formID" id="formID">
  <table width="426" height="461" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>GALLERY_INFO</strong></div></td>
    </tr>
    <tr>
      <td width="159"><strong>ART_ID</strong></td>
      <td width="125"><input name="art_id" type="text" id="art_id"  class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>ARTNAME</strong></td>
      <td><input name="artname" type="text" id="artname" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>ARTTYPE</strong></td>
      <td><select name="arttype" id="arttype">
        <option>select</option>
        <option value="PAINTING">PAINTING</option>
        <option value="FINE ARTS">FINE ARTS</option>
        <option value="DRIWING">DRIWING</option>
      </select></td>
    </tr>
    <tr>
      <td><strong>PRICE</strong></td>
      <td><input name="price" type="text" id="price" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>DATE_OF_LAUNCH</strong></td>
      <td><input name="date" type="text" id="date" class=class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td><strong>STOCK</strong></td>
      <td><input name="stock" type="text" id="stock" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>DESCRIPTION</strong></td>
      <td><textarea name="discription" id="discription" class="validate[required,custom[onlyLetter]]"></textarea></td>
    </tr>
    <tr>
      <td><strong>SAMPLE_IMAGES</strong></td>
      <td><input type="file" name="file"></td>
    </tr>
    <tr>
      <td><strong>ARTIST_NAME</strong></td>
      <td><input name="artist_name" type="text" id="artist_name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset"class="btn btn-danger">
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
