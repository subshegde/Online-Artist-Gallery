<?php include('dbconnect.php') ?>

<?php
$Gid=$_REQUEST['Gid'];
$sql="delete from Gallery_Details where Gid='$Gid' ";
$conn->query($sql);
?>
<script>
alert("Deleted...");
document.location="viewgallery_details.php";
</script>