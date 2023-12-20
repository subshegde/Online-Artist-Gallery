<?php

include('../db_connection/dbconnect.php');

$gid=$_REQUEST['gid'];

$sql="delete from gallery_details where gid ='$gid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Deleted...");
document.location="gallery_details_view.php";
</script>


