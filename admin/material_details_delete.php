<?php
 include('dbconnect.php'); 
$mid=$_REQUEST['mid'];
$sql="delete from materials_details where mid='$mid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Material details deleted successfully");
document.location="material_details_view.php";
</script>
