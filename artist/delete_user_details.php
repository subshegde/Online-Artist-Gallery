
 <?php include('dbconnect.php') ?>

<?php
$Uid=$_REQUEST["Uid"];
$sql="delete from User_Details where uid='$Uid' ";
$conn->query($sql);
?>
<script>
alert("Deleted...");
document.location="viewuserdetails.php";
</script>