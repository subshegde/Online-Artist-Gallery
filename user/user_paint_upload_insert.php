<?php
 include('dbconnect.php');
$uid=$_POST['uid'];
$aid=$_POST['aid'];
$paintname=$_POST['paintname'];
$paintdescription=$_POST['paintdescription'];

$paintupload=$_FILES['paintupload']['name'];
$tmp_location=$_FILES['paintupload']['tmp_name'];
$target="../images/".$paintupload;
move_uploaded_file($tmp_location,$target);


$uploaddate=$_POST['uploaddate'];


$sql="insert into user_paint_upload values(null,'$uid','$aid','$paintname','$paintdescription','$paintupload','$uploaddate','New')";
mysqli_query($conn,$sql);
?>

<script>
alert("Successfully uploaded");
document.location="user_paint_upload_view.php";
</script>