<?php
include('dbconnect.php');
$mid=$_POST['mid'];
$quantity=$_POST['quantity'];
$useddate =$_POST['useddate'];
$aid=$_POST['aid'];

$sql="insert into material_used values(null,'$mid','$quantity','$useddate','$aid')";
mysqli_query($conn,$sql);
?>

<script>
alert(" Material used details inserted successfully");
document.location="material_used_view.php";
</script>