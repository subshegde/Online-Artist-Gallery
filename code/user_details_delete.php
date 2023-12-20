<?php

include('../db_connection/dbconnect.php');

$uid=$_REQUEST['uid'];

$sql="delete from user_details where uid='$uid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Deleted...");
document.location="user_details_view.php";
</script>

