<?php
include('C:\xampp\htdocs\artistgallery\db_connect\db_connection.php');

$upuid=$_POST['upuid'];
$uid=$_POST['uid'];
$paintname=$_POST['paintname'];
$paintdescription=$_POST['paintdescription'];

$paintupload=$_FILES['paintupload']['name'];
$tmp_location=$_FILES['paintupload']['tmp_name'];
$target="../images/".$paintupload;
move_uploaded_file($tmp_location,$target);



$uploaddate=$_POST['uploaddate'];
$uploadstatus=$_POST['uploadstatus'];

$sql="update user_paint_upload set uid='$uid',paint_name='$paintname',paint_description='$paintdescription',paint_upload='$paintupload',upload_date='$uploaddate',upload_status='$uploadstatus' where upuid='$upuid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Successfully updated...");
document.location="user_paint_upload_view.php";
</script>