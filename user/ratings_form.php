<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> General Forms<br><small>All the elements you need!</small></h1>
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
                        <h4>Rating Details </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					
<form name="formID" id="formID" method="post" action="ratings_insert.php">
  <table width="337" border="0">
    <tr>
      <td colspan="2">RATINGS</td>
    </tr>
    <tr>
      <td width="167">Select Gallery</td>
      <td width="204"><select name="galleryid" class="validate[required]" id="galleryid">
        <option>Select Gallery</option>
<?php include('dbconnect.php') ?>
		<?php
							$sql="select * from gallery_details";
							$res=$conn->query($sql);
							while($row=mysqli_fetch_array($res))
								{
								?>
								<option value="<?php echo $row['gid']; ?>"><?php echo $row['Gname'];?></option>
								<?php
								}
								?>
      </select></td>
    </tr>
    <tr>
      <td>Select Rating</td>
      <td><select name="ratings" id="ratings" class="validate[required]">
        <option>Select Ratings</option>
        <option value="2">*</option>
        <option value="4">**</option>
        <option value="6">***</option>
        <option value="8">****</option>
        <option value="10">*****</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success"></td>
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
