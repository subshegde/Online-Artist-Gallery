<?php
 include('dbconnect.php');
$upuid=$_REQUEST['upuid'];
$sql="delete from user_paint_upload where upuid='$upuid'";
mysqli_query($conn,$sql);
?>

<script>
alert("User paint upload details deleted successfully");
document.location="user_paint_upload_view.php";
</script>
