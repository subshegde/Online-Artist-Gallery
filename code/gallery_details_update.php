<?php
include('../db_connection/dbconnect.php');

$gid=$_POST['gid'];
$gname=$_POST['gname'];
$description=$_POST['description'];
$artist_id=$_POST['artist_id'];
$g_date=$_POST['g_date'];
$gallery_type_id=$_POST['gallery_type_id'];
$price=$_POST['price'];
$status=$_POST['status'];

$sql="update gallery_details set gname='$gname',description='$description',artist_id='$artist_id',g_date='$g_date',gallery_type_id='$gallery_type_id',price='$price',status='$status' where gid='$gid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Updated...");
document.location="gallery_details_view.php";
</script>

