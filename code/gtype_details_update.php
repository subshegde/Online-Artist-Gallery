<?php
include('../db_connection/dbconnect.php'); 
$gallery_type_id=$_POST['gallery_type_id'];
$gtype_name=$_POST['gtype_name'];
$gt_description=$_POST['gt_description'];


$sql="update gtype_details set gallery_type_id='$gallery_type_id',gtype_name='$gtype_name',gt_description='$gt_description' where gallery_type_id='$gallery_type_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("Updated...");
document.location="gallery_type_details_view.php";
</script>
