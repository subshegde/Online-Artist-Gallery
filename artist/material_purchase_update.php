<?php
include('dbconnect.php');

$mpid=$_POST['mpid'];
$mid=$_POST['mid'];
$materialpurchaserate=$_POST['materialpurchaserate'];
$materialpurchasedate =$_POST['materialpurchasedate'];
$aid=$_POST['aid'];


$sql="update material_purchase set mid='$mid',material_purchase_rate='$materialpurchaserate',material_purchase_date='$materialpurchasedate',aid='$aid' where mpid='$mpid'";
mysqli_query($conn,$sql);
?>

<script>
alert(" Material purchase details updated...");
document.location="material_purchase_view.php";
</script>