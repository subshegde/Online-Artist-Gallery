<?php

include('../db_connection/dbconnect.php');

$gid=$_POST['gid'];
$ratings=$_POST['ratings'];


$sql="insert into ratings values(null,'$gid','$ratings') ";
mysqli_query($conn,$sql);

?>
<script>
alert("Inserted....");
document.location="ratings_details_view.php";
</script>
