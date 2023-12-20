<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
				               
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Ratings Form<br><small>Please provide..!</small></h1>
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
                    <li class="active"><a href="">Ratings</a></li>
              </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Rating Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
                      <form name="form1"id="formID" method="post" action="ratings_details_insert.php">
                        <div align="center"></div>
  <table width="316" height="179" align="center">
    <tr>
      <td><strong>Gallery Id </strong></td>
      <td><select name="gid" id="gid">
        <option>Select </option>
        <?php
		
		include('../db_connection/dbconnect.php');
  
        $sql="select * from  gallery_details";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
        <option value="<?php echo $row['gid'];?>"><?php echo $row['gname'];?></option>
        <?php
		
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Ratings</strong></td>
      <td><input name="ratings" class="validate[required,custom[onlyNumber]]"type="text" id="ratings"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit"class="btn btn-primary" value="Submit">
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
			
			
<?php include('footer.php');  ?>


