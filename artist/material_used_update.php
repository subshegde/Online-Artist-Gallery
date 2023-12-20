<?php
include('dbconnect.php');

$muid=$_REQUEST['muid'];
$mid=$_POST['mid'];
$quantity=$_POST['quantity'];
$useddate =$_POST['useddate'];
$aid=$_POST['aid'];

$sql="update material_used set mid='$mid',quantity='$quantity',used_date='$useddate',aid='$aid' where muid='$muid'";
mysqli_query($conn,$sql);
?>

<script>
alert(" Material used details updated...");
document.location="material_used_view.php";
</script>