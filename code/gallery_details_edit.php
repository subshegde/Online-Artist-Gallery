<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Gallery Details Update Form<br>
                  <small>Please provide...!</small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Update Form</a> <span class="divider"><i class="icon-angle-right"></i></span>
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
<?php
include('../db_connection/dbconnect.php');
 
$gid=$_REQUEST['gid'];
 
$sql="select * from gallery_details where gid='$gid'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form action="gallery_details_update.php" method="post" enctype="multipart/form-data" name="form1">
<input type="hidden" value="<?php echo $row['gid'];?>" name="gid">
<table width="429" height="354" border="0" align="center">
    <tr>
      <td><strong>Gallery Name </strong></td>
      <td><input name="gname" value="<?php echo $row['gname'];?>" type="text" id="gname"></td>
    </tr>
    <tr>
      <td><strong>Description</strong></td>
      <td><textarea name="description" id="description"><?php echo $row['description'];?></textarea></td>
    </tr>
    <tr>
      <td><strong>Artist Id </strong></td>
      <td><input name="artist_id" value="<?php echo $row['artist_id'];?>" type="text" id="artist_id"></td>
    </tr>
    <tr>
      <td><strong>Date</strong></td>
      <td><input name="g_date" value="<?php echo $row['g_date'];?>" type="text" id="g_date"></td>
    </tr>
    <tr>
      <td><strong>Gallery Type Id </strong></td>
      <td><input name="gallery_type_id" value="<?php echo $row['gallery_type_id'];?>" type="text" id="gallery_type_id"></td>
    </tr>
    <tr>
      <td><strong>Price</strong></td>
      <td><input name="price" value="<?php echo $row['price'];?>" type="text" id="price"></td>
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td><input name="status" value="<?php echo $row['status'];?>" type="text" id="status"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit"class="btn btn-success" value="Update">
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



