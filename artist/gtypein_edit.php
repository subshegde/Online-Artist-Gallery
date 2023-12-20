<?php include('dbconnect.php') ?>

<?php
$Gid=$_POST['galleryid'];
$gtypename=$_POST['gtypename'];
$descp=$_POST['description'];
$sql="update GType_Details set Gtype_Name='$gtypename',description='$descp' where gallery_type_id='$Gid' ";
$conn->query($sql);
?>

<script>
alert("Record Is updated..");
document.location="viewgtype_details.php";
</script>