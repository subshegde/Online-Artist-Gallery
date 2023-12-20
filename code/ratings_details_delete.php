<?php

include('../db_connection/dbconnect.php');

$rid=$_REQUEST['rid'];

$sql="delete from ratings where rid='$rid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Deleted...");
document.location="ratings_details_view.php";
</script>
