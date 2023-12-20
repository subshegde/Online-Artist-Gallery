<?php

include('../db_connection/dbconnect.php');

$gallery_type_id=$_REQUEST['gallery_type_id'];

$sql="delete from gtype_details where gallery_type_id='$gallery_type_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("Deleted...");
document.location="gallery_type_details_view.php";
</script>



