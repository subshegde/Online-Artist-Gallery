<?php include('dbconnect.php') ?>
<?php
$gid=$_REQUEST['Gid'];

$sql="delete from GType_Details where gallery_type_id='$gid' ";
$conn->query($sql);
?>
<script>
alert("Deleted...");
document.location="viewgtype_details.php";
</script>