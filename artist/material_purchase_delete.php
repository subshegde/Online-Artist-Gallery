<?php
include('dbconnect.php');
$mpid=$_REQUEST["mpid"];
$sql="delete from material_purchase where mpid='$mpid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Material purchase details deleted successfully");
document.location="material_purchase_view.php";
</script>
