
<?php

include('../db_connection/dbconnect.php');

$aid=$_REQUEST['aid'];

$sql="delete from artist_details where aid ='$aid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Deleted...");
document.location="artist_details_view.php";
</script>
