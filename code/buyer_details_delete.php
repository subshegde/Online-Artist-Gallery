

<?php

include('../db_connection/dbconnect.php');

$bid=$_REQUEST['bid'];

$sql="delete from buyer_details where bid  ='$bid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Deleted...");
document.location="buyer_details_view.php";
</script>

