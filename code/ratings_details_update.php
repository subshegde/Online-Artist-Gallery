<?php
include('../db_connection/dbconnect.php');
 
$rid=$_POST['rid'];
$gid=$_POST['gid'];
$ratings=$_POST['ratings'];


$sql="update ratings set gid='$gid',ratings='$ratings' where rid='$rid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Updated...");
document.location="ratings_details_view.php";
</script>
