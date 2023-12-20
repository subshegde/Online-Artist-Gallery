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
                        <h4>Gallery Info Edit</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
<?php
include("dbconnect.php");
$a_id=$_REQUEST['a_id'];
$sql="select * from  gallary_info where artid='$a_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<?php include("val.php");?>
<form action="gallery_info_update.php" method="post"  name="formiD" id="formID">
 <input type="hidden" name="a_id" value="<?php echo $row['artid']; ?>">
  <table width="426" height="461" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>GALLERY_INFO</strong></div></td>
    </tr>
    <tr>
      <td width="159"><strong>ARTNAME</strong></td>
      <td width="125"><input name="artname" type="text" id="artname" value="<?php echo $row['artname'];?>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>ARTTYPE</strong></td>
      <td><select name="arttype" size="1" id="arttype" value="<?php echo $row['arttype'];?>">
        <option selected>select</option>
        <option value="PAINTING">PAINTING</option>
        <option value="FINE ARTS">FINE ARTS</option>
        <option value="DRIWING">DRIWING</option>
      </select></td>
    </tr>
    <tr>
      <td><strong>PRICE</strong></td>
      <td><input name="price" type="text" id="price" value="<?php echo $row['price'];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>DATE_OF_LAUNCH</strong></td>
      <td><input name="g_date" type="date" id="g_date" value="<?php echo $row['date_of_launch'];?>" class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td><strong>STOCK</strong></td>
      <td><input name="stock" type="text" id="stock" value="<?php echo $row['stock'];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>DESCRIPTION</strong></td>
      <td><textarea name="discription" id="discription" class="validate[required,custom[onlyLetter]]"><?php echo $row['description'];?> </textarea></td>
    </tr>
    <tr>
      <td><strong>SAMPLE_IMAGES</strong></td>
      <td><input type="file" name="file" value="<?php echo $row['sample_image'];?>"></td>
    </tr>
    <tr>
      <td><strong>ARTIST_NAME</strong></td>
      <td><input name="artist_name" type="text" id="artist_name" value="<?php echo $row['artist_name'];?>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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
