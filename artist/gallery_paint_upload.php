<?php session_start(); ?>
<?php include('dbconnect.php'); ?>

<?php

	$photo=$_FILES["photo"]['name'];
$tmp_location=$_FILES["photo"]["tmp_name"];
$target="paint_images/".$photo;
move_uploaded_file($tmp_location,$target);
	
$gname=$_SESSION["gallery_name"];
	
	$sql="update gallery_details set upload_paint='$photo' where gname='$gname' ";
   mysql_query($sql);
  

?>
<script>
alert("Your paint Image Uploded");
document.location="viewgallery_details.php";
</script>