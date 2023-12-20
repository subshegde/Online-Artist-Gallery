<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Gallery Form<br><small></small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="#"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">Gellery</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Gallery Details </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('dbconnect.php') ?>     
					<?php 
					
					
					
					$dat=date('d-m-Y');
					
					$uname=$_SESSION['uname'];
					$sql="select * from artist_details where user_name='$uname'" ;
					$res=$conn->query($sql);
					$row=mysqli_fetch_array($res);
					
					$aid=$row['aid'];
					
					$aname=$row['aname'];
					
					
					
?>
					
										
<form name="formId" id="formId" method="post" enctype="multipart/form-data"  action="gallery_insert.php">
  <table width="362" border="0">
   
    <tr>
      <td width="162">Gallery Paint Name</td>
      <td width="184"><input name="galleryname" type="text" id="galleryname" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Description      </td>
      <td><textarea name="description" class="validate[required,custom[onlyLetter]]" id="description"></textarea></td>
    </tr>
    <tr>
      <td>Artist Name </td>
      <td><input name="artistid" type="hidden" id="artistid" value="<?php echo $row['aid'];?>"><?php echo $row['aname'];?></td>
    </tr>
	
    <tr>
      <td>Date</td>
      <td><input name="date" type="text" readonly=""id="date" value="<?php echo $dat; ?>"></td>
    </tr>
    <tr>
      <td>Select Gallery Type</td>
      <td><select name="gtypeid" id="gtypeid">
        <option>Select Gallery Type</option>
        <?php
$sql1="select * from gtype_details";
$res=$conn->query($sql1);
while($row1=mysqli_fetch_array($res))
{
?>
        <option value="<?php echo $row1['gallery_type_id'];?>"><?php echo $row1['gtype_Name'];?></option>
        <?php
}
?>
      </select></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><input name="price" type="text" id="price"></td>
    </tr>
    <tr>
      <td>Gallery Photo</td>
      <td><input name="photo" type="file" id="photo"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit" class="btn btn-success"></td>
      <td>&nbsp;</td>
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

