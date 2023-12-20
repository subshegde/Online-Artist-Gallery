<?php
include('dbconnect.php');
$mid=$_POST['mid'];
$materialpurchaserate=$_POST['materialpurchaserate'];
$materialpurchasedate =$_POST['materialpurchasedate'];
$aid=$_POST['aid'];
									

$sql="insert into material_purchase values(null,'$mid','$materialpurchaserate','$materialpurchasedate','$aid')";
mysqli_query($conn,$sql);
?>

<script>
alert(" Material purchase details inserted successfully");
document.location="material_purchase_view.php";
</script>