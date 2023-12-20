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
                        <h4>Gallerytype Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<?php include('dbconnect.php') ?>
<?php
    $Gid=$_REQUEST['Gid'];
	 $sql="select * from gtype_details where gallery_type_id='$Gid' ";
	$res=$conn->query($sql);
	$row=mysqli_fetch_array($res);
?>
<body>
<form name="formID" id="formID" method="post" action="gtypein_edit.php">
  <table width="500" border="0">
   
    <input name="galleryid" type="hidden" id="galleryid" value="<?php echo $row['gallery_type_id']; ?>"  >
   
    <tr>
      <td>gallery type name      </td>
      <td><input name="gtypename" type="text" id="gtypename" value="<?php echo $row['gtype_Name']; ?>"class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>descrition</td>
      <td><input name="description" type="text" id="description" value="<?php echo $row['description']; ?>" class="validate[required]"> </td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="update" class="btn btn-success"></td>
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
