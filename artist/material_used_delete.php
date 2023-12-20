<?php
include('dbconnect.php');
$muid=$_REQUEST["muid"];
$sql="delete from material_used where muid='$muid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Material used details deleted successfully");
document.location="material_used_view.php";
</script>
