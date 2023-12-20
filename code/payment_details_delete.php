<?php

include('../db_connection/dbconnect.php');

$tid=$_REQUEST['tid'];

$sql="delete from payment_details where tid='$tid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Deleted...");
document.location="payment_details_view.php";
</script>

