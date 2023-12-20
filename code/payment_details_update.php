<?php

include('../db_connection/dbconnect.php');
 
$tid=$_POST['tid'];
$uid=$_POST['uid'];
$gid=$_POST['gid'];
$bank_name=$_POST['bank_name'];
$amt=$_POST['amt'];
$pdate=$_POST['pdate'];
$p_status=$_POST['p_status'];

$sql="update payment_details set uid='$uid',gid='$gid',bank_name='$bank_name',amt='$amt',pdate='$pdate',p_status='$p_status' where tid='$tid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Updated...");
document.location="payment_details_view.php";
</script>

