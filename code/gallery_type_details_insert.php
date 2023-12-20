<?php

include('../db_connection/dbconnect.php');

$gtype_name=$_POST['gtype_name'];
$gt_description=$_POST['gt_description'];


$sql="insert into gtype_details values(null,'$gtype_name','$gt_description')";
mysqli_query($conn,$sql);

?>
<script>
alert("Inserted....");
document.location="gallery_type_details_view.php";
</script>
