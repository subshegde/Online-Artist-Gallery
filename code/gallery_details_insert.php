<?php

include('../db_connection/dbconnect.php');

$gname=$_POST['gname'];
$description=$_POST['description'];
$artist_id=$_POST['artist_id'];
$file=$_POST['file'];
$g_date=$_POST['g_date'];
$gallery_type_id=$_POST['gallery_type_id'];
$price=$_POST['price'];
$status=$_POST['status'];

$sql="insert into gallery_details values(null,'$gname','$description','$artist_id','$file','$g_date','$gallery_type_id','$price','$status')";
mysqli_query($conn,$sql);

?>
<script>
alert("Inserted....");
document.location="gallery_details_view.php";
</script>
