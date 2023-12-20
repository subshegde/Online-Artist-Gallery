<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
				               
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Gallery  Form<br>
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
                    <li class="active"><a href="">Gallery</a></li>
              </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Gallery Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form action="gallery_details_insert.php"id="formID" method="post" enctype="multipart/form-data" name="form1">
  <table width="424" height="385" border="0" align="center">
    <tr>
      <td><strong>Gallery Name </strong></td>
      <td><input name="gname" class="form-control validate[required,custom[onlyLetter]]"type="text" id="gname"></td>
    </tr>
    <tr>
      <td><strong>Description</strong></td>
      <td><textarea name="description" class="validate[required]"id="description"></textarea></td>
    </tr>
    <tr>
      <td><strong>Artist Name </strong></td>
      <td><select name="artist_id" class="validate[required]" id="artist_id">
        <option value="">Select </option>
        <?php
		
		include('../db_connection/dbconnect.php');
  
	    $sql="select * from artist_details";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
        <option value="<?php echo $row['aid'];?>"><?php echo $row['aname'];?></option>
        <?php
		
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Upload Paint </strong></td>
      <td><input type="file" name="file"></td>
    </tr>
    <tr>
      <td><strong>Date</strong></td>
      <td><input name="g_date" class="validate[required,custom[date]]"type="text" id="g_date"></td>
    </tr>
    <tr>
      <td><strong>Gallery Type Id </strong></td>
      <td>        <select name="gallery_type_id" class="validate[required]"id="gallery_type_id">
          <option value="">Select </option>
          <?php
		
		
      $sql="select * from  gtype_details";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
          <option value="<?php echo $row['gallery_type_id'];?>"><?php echo $row['gtype_name'];?></option>
          <?php
		
		}
		?>
        </select></td>
    </tr>
    <tr>
      <td><strong>Price</strong></td>
      <td><input name="price"class="validate[required]" type="text" id="price"></td>
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td><input name="status"class="validate[required]" type="text" id="status"></td>
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

